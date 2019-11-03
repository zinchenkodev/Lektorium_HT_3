<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeWorkController extends AbstractController
{
    public function index()
    {
        return new Response('The index page');
    }

    /**
     * @Route("/home_work/route", name="route")
     */
    public function route()
    {
        return new Response('route');
    }

    public function list()
    {
        return new Response('list');
    }

    /**
     * @Route("/request/{letters}", name="request", requirements={"letters"="[a-zа]"})
     *
     * @param $letters
     *
     * @return Response
     */
    public function request($letters)
    {
        return new Response( $this->json([ 'letters' => $letters ]) );
    }

    /**
     * @Route("/redirect")
     */
    public function directions()
    {
        return new RedirectResponse($this->redirect('/', 302));
    }
}