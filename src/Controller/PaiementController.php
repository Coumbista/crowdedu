<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class PaiementController extends Controller
{
    /**
     * @Route("/paiement", name="paiement")
     */
    public function index()
    {
        
        $result = post('https://payexpress.com/api/payment/request-payment', $postfields, [
            "API_KEY: ".$api_key,
            "API_SECRET: ".$api_secret
        ]);
    
        $jsonResponse = json_decode($result, true);
        // return $this->render('paiement/index.html.twig', [
        //     'controller_name' => 'PaiementController',
        // ]);
    }
    
}
