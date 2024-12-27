<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3Validator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{

    #[Route('/api/contact', name: 'api_contact', methods: ['POST'])]
    public function newContact(Request $request, MailerInterface $mailer, EntityManagerInterface $em): JsonResponse
    {

        $data = json_decode($request->getContent(), true);
        $contact = new Contact();
        if (!$data || !isset($data['firstname'], $data['lastname'], $data['message'], $data['email'])) {
            return new JsonResponse(["error " => "Données invalide"], 400);
        }
        $form = $this->createForm(ContactType::class, $contact);
        $form->submit($data);

        //BDD
        $em->persist($contact);
        $em->flush();

        //Mail 
        $email = (new Email())
            ->from("chloe-douguedroit@cohesion-sportive.fr")
            ->to("chloe-douguedroit@cohesion-sportive.fr")
            ->replyTo($data["email"])
            ->subject("Nouveau message de contact par le formulaire")
            ->text("Nom: {$data['lastname']}\nPrénom: {$data['firstname']}\nEmail: {$data['email']}\nTéléphone: {$data['phone']}\nMessage: {$data['message']}\n");
        $mailer->send($email);

        return new JsonResponse("Votre message a été envoyé", 200);
    }

    #[Route('/api/test', name: 'api_test', methods: ['GET'])]
    public function test(): JsonResponse
    {
        return new JsonResponse("test", 200);
    }
}
