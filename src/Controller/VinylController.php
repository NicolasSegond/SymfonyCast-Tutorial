<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route(path: '/', name: 'home', methods: ['GET'])]
    public function homepage(): Response
    {
        return new Response('Title: PB and James');
    }
}
