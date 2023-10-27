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

    #[Route('/browse/{slug}', name: 'browse')]
    public function browse($slug = null): Response
    {
        if($slug)
        {
            $title = 'Genre: '.str_replace('-', ' ', $slug);
        } 
        else
        {
            $title = 'All Genres';
        }

        return new Response($title);
    }
}
