<?php

namespace App\Controller;

use App\Service\UlozenkaService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Throwable;

class BranchController extends AbstractController
{
    #[Route('/branches')]
    public function index(UlozenkaService $service, LoggerInterface $logger): Response
    {
        try {
            return $this->render('branch/list.html.twig', [
                'branches' => $service->getListOfBranches(),
            ]);
        } catch (Throwable $t) {
            $logger->error($t->getMessage());

            return new Response('An error ocurred!');
        }
    }
}
