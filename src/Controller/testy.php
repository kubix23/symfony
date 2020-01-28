<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testy
{
    /**
     * @Route("/arts/{art}")
     */
    public function homepage($art)
    {
        return new Response('OMG! My first page already ' . $art);
    }
}