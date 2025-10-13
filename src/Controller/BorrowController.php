<?php

namespace App\Controller;

use App\Entity\Book;
use App\Entity\BookBorrow;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BorrowController extends AbstractController
{
    #[Route('/borrow/{id}', name: 'app_borrow', methods: ['GET','POST'])]
    public function borrow(Request $request, Book $book, UserRepository $userRepository, EntityManagerInterface $em): Response
    {
        $pageTitle = 'Borrow Book';

        if ($request->isMethod('POST')) {
            $username = trim((string)$request->request->get('username', ''));

            if ($username === '') {
                $this->addFlash('error', 'Please enter a user name.');
                return $this->redirectToRoute('app_borrow', ['id' => $book->getId()]);
            }

            $user = $userRepository->findOneBy(['name' => $username]);

            if (!$user) {
                $this->addFlash('error', sprintf("User '%s' not found.", $username));
                return $this->redirectToRoute('app_borrow', ['id' => $book->getId()]);
            }

            if ($book->getAvailableCount() === null || $book->getAvailableCount() <= 0) {
                $this->addFlash('error', 'This book is currently not available to borrow.');
                return $this->redirectToRoute('app_books');
            }

            // Create borrow record
            $borrow = new BookBorrow();
            $borrow->setBook($book);
            $borrow->setBorrower($user);
            $borrow->setBorrowedAt(new \DateTimeImmutable());

            // Update counts
            $book->setAvailableCount($book->getAvailableCount() - 1);
            $user->setBorrowedCount((int)$user->getBorrowedCount() + 1);

            $em->persist($borrow);
            $em->persist($book);
            $em->persist($user);
            $em->flush();

            // Show success page
            return $this->render('borrow/success.html.twig', [
                'page_title' => 'Borrowed',
                'book_title' => $book->getTitle(),
                'user_name' => $user->getName(),
            ]);
        }

        return $this->render('borrow/index.html.twig', [
            'page_title' => $pageTitle,
            'book' => $book,
        ]);
    }

    // #[Route('/borrow/{id}', name: 'app_borrow', methods: ['GET', 'POST'])]
    // public function borrow(Book $book, Request $request, EntityManagerInterface $em): Response
    // {
    //     if ($request->isMethod('POST')) {
    //         $quantity = (int) $request->request->get('quantity');

    //         if ($book->getAvailableCount() >= $quantity && $quantity > 0) {
    //             $book->setAvailableCount($book->getAvailableCount() - $quantity);
    //             $em->flush();

    //             $this->addFlash('success', 'Successfully borrowed ' . $quantity . ' copy(ies) of ' . $book->getTitle());
    //         } else {
    //             $this->addFlash('error', 'Not enough copies available.');
    //         }

    //         return $this->redirectToRoute('app_books');
    //     }

    //     return $this->render('borrow/index.html.twig', [
    //         'page_title' => 'Borrow Book',
    //         'book' => $book,
    //     ]);
    // }
}
