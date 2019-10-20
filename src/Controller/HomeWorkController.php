<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeWorkController extends AbstractController
{
    public function index()
    {
        return new Response('The index page');
    }

    /**
     * @Route("/home_work/route")
     */
    public function route()
    {
        return new Response('route');
    }

    public function list()
    {
        return new Response('list');
    }
}