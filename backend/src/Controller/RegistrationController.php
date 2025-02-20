<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    public function __construct(
        private EmailVerifier $emailVerifier,
        private SerializerInterface $serializer,
    ) {
    }

    #[Route('/api/register', name: 'api_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $user = new User();
        $data['password'] = $userPasswordHasher->hashPassword($user, $data['plainPassword']);
        unset($data['plainPassword']);

        $form = $this->createForm(UserType::class, $user);
        $form->submit($data);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();

            // generate a signed url and email it to the user
            // $this->emailVerifier->sendEmailConfirmation(
            //     'api_verify_email',
            //     $user,
            //     (new TemplatedEmail())
            //         ->from(new Address('chloe-douguedroit@cohesion-sportive.fr', 'cohesion-sportive'))
            //         ->to((string) $user->getEmail())
            //         ->subject('Please Confirm your Email')
            //         ->htmlTemplate('registration/confirmation_email.html.twig')
            // );
            return new JsonResponse([
                'message' => 'User registered!',
                'code' => 1
            ], 201);

            // do anything else you need here, like send an email
        }

        return new JsonResponse([
            'message' => 'User not registered!',
            'code' => 2
        ], 400);
    }

    #[Route('/api/verify/email', name: 'api_verify_email')]
    public function verifyUserEmail(Request $request, UserRepository $userRepository): JsonResponse
    {

        $data = json_decode($request->getContent(), true); // retrieve the user id from the url
        $id = $data['id'];
        // Verify the user id exists and is not null
        if (null === $id) {
            return new JsonResponse(['message' => 'Id not found'], Response::HTTP_NOT_FOUND);
        }

        $user = $userRepository->find($id);
        dump($user);

        // Ensure the user exists in persistence
        if (null === $user) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }
        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            // /** @var User $user */
            // $user = $this->getUser();
            $this->emailVerifier->handleEmailConfirmation($request, $user);
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return new JsonResponse(['message' => 'Error verifying email'], Response::HTTP_BAD_REQUEST);
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return new JsonResponse(['message' => 'Email verified'], Response::HTTP_OK);
    }
}
