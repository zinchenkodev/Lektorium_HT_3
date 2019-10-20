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
     * @Route("/request/{word}", name="request", requirements={"word"="\w+"})
     *
     * @param $word
     *
     * @return Response
     */
    public function request($word)
    {
        $response = new Response();
        $response->setContent(json_encode([ 'word' => $word ]));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/redirect")
     */
    public function directions()
    {
        return new RedirectResponse($this->redirect('/', 302));
    }
}