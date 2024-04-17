<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route(
        path: '/blog',
        name: 'blog',
        methods: ["POST"]
    )]
    public function index(): Response
    {
        $response = new Response('<h1>Article créé</h1>');
        return $response;
    }
}
