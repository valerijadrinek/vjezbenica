<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Service;

#[Route('/', name: 'app_')]
class VjezbaController extends AbstractController
{
    #[Route('/', name: 'vjezba')]
    public function index(Service $service): Response
    {
        return $this->render('vjezba/index.html.twig', [
            'service_data' => $service,
        ]);
    }
}
