<?php

namespace App\Controller;

use App\Repository\BookBorrowRepository;
use App\Repository\UserRepository;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReturnController extends AbstractController
{
    #[Route('/return/{id}', name: 'app_return', methods: ['GET','POST'])]
    public function return(Request $request, int $id, BookRepository $bookRepository, UserRepository $userRepository, BookBorrowRepository $borrowRepo, EntityManagerInterface $em): Response
    {
        $book = $bookRepository->find($id);
        if (!$book) {
            $this->addFlash('error', 'Book not found.');
            return $this->redirectToRoute('app_books');
        }

        $pageTitle = 'Return Book';

        if ($request->isMethod('POST')) {
            $username = trim((string)$request->request->get('username', ''));

            if ($username === '') {
                $this->addFlash('error', 'Please enter a user name.');
                return $this->redirectToRoute('app_return', ['id' => $book->getId()]);
            }

            $user = $userRepository->findOneBy(['name' => $username]);
            if (!$user) {
                $this->addFlash('error', sprintf("User '%s' not found.", $username));
                return $this->redirectToRoute('app_return', ['id' => $book->getId()]);
            }

            // Find an active borrow record for this user & book
            $borrowRecord = $borrowRepo->findOneBy([
                'book' => $book,
                'borrower' => $user,
                'returnedAt' => null,
            ]);

            if (!$borrowRecord) {
                $this->addFlash('error', 'No active borrow record found for this user and book.');
                return $this->redirectToRoute('app_return', ['id' => $book->getId()]);
            }

            // Mark returned
            $borrowRecord->setReturnedAt(new \DateTimeImmutable());
            $book->setAvailableCount((int)$book->getAvailableCount() + 1);
            $user->setBorrowedCount(max(0, (int)$user->getBorrowedCount() - 1));

            $em->persist($borrowRecord);
            $em->persist($book);
            $em->persist($user);
            $em->flush();

            return $this->render('return/success.html.twig', [
                'page_title' => 'Returned',
                'book_title' => $book->getTitle(),
                'user_name' => $user->getName(),
            ]);
        }

        return $this->render('return/index.html.twig', [
            'page_title' => $pageTitle,
            'book' => $book,
        ]);
    }
}
