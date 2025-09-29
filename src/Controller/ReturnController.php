<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReturnController extends AbstractController
{
    #[Route('/return/{title}', name: 'app_return')]
    public function index(string $title): Response
    {
        return $this->render('return/index.html.twig', [
            'page_title' => 'Return Book',
            'book_title' => $title,
        ]);
    }
}
