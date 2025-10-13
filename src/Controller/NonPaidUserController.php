<?php

namespace App\Controller;

use App\Entity\NonPaidUser;
use App\Form\NonPaidUserType;
use App\Repository\NonPaidUserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/non/paid/user')]
final class NonPaidUserController extends AbstractController
{
    #[Route(name: 'app_non_paid_user_index', methods: ['GET'])]
    public function index(NonPaidUserRepository $nonPaidUserRepository): Response
    {
        return $this->render('non_paid_user/index.html.twig', [
            'non_paid_users' => $nonPaidUserRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_non_paid_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $nonPaidUser = new NonPaidUser();
        $form = $this->createForm(NonPaidUserType::class, $nonPaidUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($nonPaidUser);
            $entityManager->flush();

            return $this->redirectToRoute('app_non_paid_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('non_paid_user/new.html.twig', [
            'non_paid_user' => $nonPaidUser,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_non_paid_user_show', methods: ['GET'])]
    public function show(NonPaidUser $nonPaidUser): Response
    {
        return $this->render('non_paid_user/show.html.twig', [
            'non_paid_user' => $nonPaidUser,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_non_paid_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, NonPaidUser $nonPaidUser, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(NonPaidUserType::class, $nonPaidUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_non_paid_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('non_paid_user/edit.html.twig', [
            'non_paid_user' => $nonPaidUser,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_non_paid_user_delete', methods: ['POST'])]
    public function delete(Request $request, NonPaidUser $nonPaidUser, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$nonPaidUser->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($nonPaidUser);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_non_paid_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
