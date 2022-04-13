<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class HomeController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('dit is de homepage');
    }

    #[Route('/recipes/{slug}')]
    public function recipe(string $slug = null): Response
    {
        if ($slug) {
            $title = 'recipe: '.u(str_replace('-', ' ', $slug))->title();
        } else {
            $title = 'All recipes';
        }

        return new Response($title);
    }


}