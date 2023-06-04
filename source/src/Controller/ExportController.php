<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExportController extends AbstractController
{
    #[Route('api/export', name: 'app_export')]
    public function index(): Response
    {
        return $this->render('export/index.html.twig', [
            'controller_name' => 'ExportController',
        ]);
    }
}
