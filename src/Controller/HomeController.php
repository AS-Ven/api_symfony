<?php

namespace App\Controller;

use App\Repository\StableRepository;
use App\Repository\UmaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(StableRepository $stableRepository, UmaRepository $umaRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'stables' => $stableRepository->findAll(),
            'umas' => $umaRepository->findAll(),
        ]);
    }
}
