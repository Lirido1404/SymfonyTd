<?php

// src/Controller/GalerieController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalerieController extends AbstractController
{
    #[Route('/Galerie/{page<\d*>}', name: 'galerie', defaults: ['page' => 1])]
    public function Galerie($page)
    {
        $images = [
            'rtr.jpg',
            'nissan.jpg',
            'bmwm5.jpg',
            'bmw135i.jpg',
            'bmw135i2.jpg',
            'bmw135i3.jpg',
            'bmwm2t2.jpg',
            'bmwm2t.jpg',
            'bmwe30.jpg',
            'bmwe36.jpg',
            'bmwm2.jpg',
            'bmwe30alpina.jpg'
        ];

        // Calculer l'index de départ en fonction de la page demandée
        $startIndex = ($page - 1) * 6;
        // Extraire les 6 images correspondantes
        $pagedImages = array_slice($images, $startIndex, 6);

        return $this->render('Galerie.html.twig', [
            'images' => $pagedImages,
        ]);
    }
}
