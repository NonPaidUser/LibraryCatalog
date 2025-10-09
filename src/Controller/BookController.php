<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/books', name: 'app_books')]
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

        return $this->render('book/index.html.twig', [
            'page_title' => 'Library Catalog',
            'books' => $books,
            'selected_category' => $category,
        ]);
    }
}
