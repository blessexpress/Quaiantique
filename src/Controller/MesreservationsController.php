<?php

namespace App\Controller;

use App\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MesreservationsController extends AbstractController
{
    #[Route('/mes-reservations', name: 'app_mesreservations')]
    public function index(): Response
    {

        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->findAll();

        dd($reservation);
        return $this->render('mesreservations/index.html.twig', [
            'controller_name' => 'MesreservationsController',
        ]);
    }

    private function getDoctrine()
    {
    }
}
