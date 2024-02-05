<?php

// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/hello/{name}')]
    public function hello($name, Request $request): Response
    {
        $request->getSession()->getFlashBag()->add('info', 'Message en vert');
        $request->getSession()->getFlashBag()->add('info', 'Message en rouge');


        return $this->render('hello.html.twig', [
            'name' => $name,
            'messages' => $request->getSession()->getFlashBag()->all(),
        ]);
    }
}
