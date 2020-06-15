<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route(
     *     "/hello/{name}",
     *     name="app_hello_index",
     *     requirements={"name": "[A-Za-z\-]+"},
     *     methods={"GET"}
     * )
     */
    public function index(string $name): Response
    {
        return new Response("Hello $name!");
    }

    /**
     * @Route(
     *     "/hello/robot/{id}",
     *     name="app_hello_robot",
     *     requirements={"id": "\d+"},
     *     methods={"GET"}
     * )
     */
    public function robot(string $id): Response
    {
        return new Response("Hello Robot X_$id!");
    }
}
