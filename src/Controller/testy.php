<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testy extends AbstractController
{
    /**
     * @Route("/arts/{art}")
     */
    public function functest($art)
    {
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
            'Random comment',
        ];
        return $this -> render("article/functest.html.twig",[
            "title" => ucwords(str_replace("-", " ",$art )),
            "comments" => $comments,
        ]);
    }
}