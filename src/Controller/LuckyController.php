<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{

    /*
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky Number: ' . $number . '</body></html>'
        );
    }
    */

    /**
     * ROTA COM O ANNOTATIONS
     */

    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);
        /*
        return new Response(
            '<html><body>Lucky Number: ' . $number . '</body></html>'
        );
        
        Forma de renderizar o conteúdo com o sistema de templates do symfony TWIG

        ABAIXO

        */

        return $this->render('number.html.twig', [
            'number' => $number,
        ]);
    }
}
