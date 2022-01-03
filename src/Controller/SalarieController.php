<?php

namespace App\Controller;

use App\Entity\Salarie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SalarieController extends AbstractController
{
    /**
     * @Route("/salarie", name="salarie")
     */
    public function index(): Response
    {
        $salaries = $this->getDoctrine()
            ->getRepository(Salarie::class)
            -> findAll();

        return $this->render('salarie/index.html.twig', [
            'salaries' => $salaries,
        ]);
    }
}
