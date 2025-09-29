<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BorrowController extends AbstractController
{
    #[Route('/borrow/{title}', name: 'app_borrow')]
    public function index(string $title): Response
    {
        // For now, just show confirmation
        return $this->render('borrow/index.html.twig', [
            'page_title' => 'Borrow Book',
            'book_title' => $title,
        ]);
    }
}
