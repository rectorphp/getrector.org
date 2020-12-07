<?php

declare(strict_types=1);

namespace Rector\Website\Controller;

use Rector\Website\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ContactController extends AbstractController
{
    #[Route('contact', name: 'contact')]
    public function __invoke(): Response
    {
        $form = $this->createForm(ContactFormType::class);

        return $this->render('homepage/contact.twig', [
            'contact_form' => $form->createView(),
        ]);
    }
}
