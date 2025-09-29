<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/books', name: 'app_books')]
    public function index(): Response
    {
        // Fake book list for now
        $books = [
            ['title' => '1984', 'author' => 'George Orwell', 'year' => 1949],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'year' => 1960],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'year' => 1925],
        ];

        return $this->render('book/index.html.twig', [
            'page_title' => 'Library Catalog',
            'books' => $books,
        ]);
    }
}