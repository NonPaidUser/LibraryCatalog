<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/add/book')]
final class AddBookController extends AbstractController
{
    #[Route(name: 'app_add_book_index', methods: ['GET'])]
    // public function index(BookRepository $bookRepository): Response
    // {
    //     return $this->render('add_book/index.html.twig', [
    //         'books' => $bookRepository->findAll(),
    //     ]);
    // }
        public function index(Request $request, BookRepository $bookRepository): Response
    {
        $category = $request->query->get('category');

        if ($category) {
            $books = $bookRepository->createQueryBuilder('b')
                ->where('b.category LIKE :category')
                ->setParameter('category', '%' . $category . '%')
                ->getQuery()
                ->getResult();
        } else {
            $books = $bookRepository->findAll();
        }

        return $this->render('add_book/index.html.twig', [
            'page_title' => 'Library Catalog',
            'books' => $books,
            'selected_category' => $category,
        ]);
    }

    #[Route('/new', name: 'app_add_book_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($book);
            $entityManager->flush();

            return $this->redirectToRoute('app_add_book_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('add_book/new.html.twig', [
            'book' => $book,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_add_book_show', methods: ['GET'])]
    public function show(Book $book): Response
    {
        return $this->render('add_book/show.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_add_book_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_add_book_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('add_book/edit.html.twig', [
            'book' => $book,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_add_book_delete', methods: ['POST'])]
    public function delete(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$book->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($book);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_add_book_index', [], Response::HTTP_SEE_OTHER);
    }
}
