<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\BookBorrowRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{

    // #[Route('/user/search', name: 'app_user_search', methods: ['GET'])]
    // public function searchAll(Request $request, UserRepository $userRepository)
    // {
    //     $user = $userRepository->findAll();

    //     return $this->render('user/search.html.twig', [
    //         'user' => $user,
    //     ]);
    // }

    #[Route('/user/search', name: 'app_user_search', methods: ['GET','POST'])]
    public function search(Request $request, UserRepository $userRepository)
    {
        $user = new User();
        if ($request->isMethod('POST')) {
            $username = trim((string)$request->request->get('username', ''));
            if ($username === '') {
                $this->addFlash('error', 'Please enter a user name.');
                return $this->redirectToRoute('app_user_search');
            }

            $user = $userRepository->findOneBy(['name' => $username]);
            if (!$user) {
                $this->addFlash('error', sprintf("User '%s' not found.", $username));
                return $this->redirectToRoute('app_user_search');
            }

            return $this->redirectToRoute('app_user_borrowed', ['id' => $user->getId()]);
        }

        $user1 = $userRepository->findAll();

        return $this->render('user/search.html.twig', [
            'user1' => $user1,
            'user' => $user,
            'page_title' => 'Find User',
        ]);
    }

    #[Route('/user/{id}/borrowed', name: 'app_user_borrowed', methods: ['GET'])]
    public function borrowed(int $id, BookBorrowRepository $borrowRepo, UserRepository $userRepository): Response
    {
        $user = $userRepository->find($id);
        if (!$user) {
            $this->addFlash('error', 'User not found.');
            return $this->redirectToRoute('app_user_search');
        }

        // active borrowed records (not returned)
        $borrowed = $borrowRepo->findBy(['borrower' => $user, 'returnedAt' => null]);

        return $this->render('user/borrowed.html.twig', [
            'page_title' => sprintf('%s — Borrowed Books', $user->getName()),
            'user' => $user,
            'borrowedRecords' => $borrowed,
        ]);
    }
}

