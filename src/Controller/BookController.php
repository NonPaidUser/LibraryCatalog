<?php

namespace App\Controller;
use App\Repository\BookRepository;  // ✅ CORRECT

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/books', name: 'app_books')]
    public function index(BookRepository $bookRepository): Response
    {
        return $this->render('book/index.html.twig', [
            'page_title' => 'Library Catalog',
            'books' => $bookRepository->findAll(),
        ]);
    }
}