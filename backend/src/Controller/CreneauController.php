<?php

namespace App\Controller;

use App\Repository\CreneauRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CreneauController extends AbstractController
{
    public function __construct(
        private CreneauRepository $creneauRepository
    ) {
    }
    #[Route('/api/creneaux', name: 'api_creneaux')]
    public function showCreneaux(): JsonResponse
    {
        $data = $this->creneauRepository->findAll();
        return new JsonResponse($data, 200);
    }
    #[Route('/api/new/creneau', name: 'api_new_creneau', methods: ['POST'])]
    public function newCreneau(): JsonResponse
    {
        return new JsonResponse("creneaux", 200);
    }
}
