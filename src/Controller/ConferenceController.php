<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(Request $request): Response
    {
        $greet = '';
        if ($name = $request->query->get('hello')){
            $greet = sprintf('<h1> hello %s!</h1>', htmlspecialchars($name));
        }
        return new Response(
            <<<EOF
                <html>
                    <body>
                    $greet
                    <img src="/images/under-construction.gif" />
                    </body>
                </html>
            EOF
        );
    }
}
