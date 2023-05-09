<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class phpclass extends AbstractController

{
    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        return $this->render('php/header.php.twig');
    }

    #[Route('/agenda', name: 'app_agenda')]
    public function agenda(): Response
    {
        return $this->render('php/agenda.php.twig');
    }
}