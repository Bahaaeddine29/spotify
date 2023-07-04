<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BravePizzaController extends AbstractController
{
    #[Route('/', name: 'app_brave_pizza')]
    public function index(): Response
    {
        $message = 'Kyks de bondy';
        return $this->render('brave_pizza/index.html.twig', [
            'controller_name' => 'BravePizzaController',
            'message' => $message
           
        ]);
    }
}
