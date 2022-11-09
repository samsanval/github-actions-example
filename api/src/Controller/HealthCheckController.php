<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

final class HealthCheckController
{
    public function __invoke(): Response
    {
        return new Response('Ok', 200);
    }

}