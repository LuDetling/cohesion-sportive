<?php

namespace App\Controller;

use App\Entity\Creneau;
use App\Form\CreneauType;
use App\Repository\CreneauRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\SerializerInterface;

class CreneauController extends AbstractController
{
    public function __construct(
        private CreneauRepository $creneauRepository
    ) {
    }
    #[Route('/api/creneaux', name: 'api_creneaux')]
    #[IsGranted('ROLE_USER', message: 'Access denied!')]
    public function showCreneaux(SerializerInterface $serialize): JsonResponse
    {
        $data = $this->creneauRepository->findAll();
        $creneaux = $serialize->serialize($data, 'json', ['groups' => 'user']);
        
        return new JsonResponse($creneaux, 200);
    }

    
    #[Route('/api/creneau/new', name: 'api_new_creneau', methods: ['POST'])]
    #[IsGranted('ROLE_USER', message: 'Access denied!')]
    public function newCreneau(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $currentUser = $this->getUser();
        $data = json_decode($request->getContent(), true);

        $creneau = new Creneau();
        $form = $this->createForm(CreneauType::class, $creneau);
        $form->submit($data);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($creneau);
            $em->flush();

            return new JsonResponse('Créneau ajouté', 201);
        }

        return new JsonResponse("Créneau invalide", 400);
    }
}
