<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{
    #[Route(path: '/', name: 'home', methods: ['GET'])]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];

        return $this->render(
            'vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
            ]
        );
    }

    #[Route('/browse/{slug}', name: 'browse')]
    public function browse($slug = null): Response
    {
        $genre = $slug ? 'Genre: ' . str_replace('-', ' ', $slug) : null;

        return $this->render('vinyl/browse.html.twig',[
            'genre' => $genre,
        ]);;
    }
}
