<?php

namespace App\Controller;

use App\Service\UlozenkaService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BranchController extends AbstractController
{
    #[Route('/branches')]
    public function index(UlozenkaService $service): Response
    {
        return $this->render('branch/list.html.twig', [
            'branches' => $service->getListOfBranches(),
        ]);
    }
}
