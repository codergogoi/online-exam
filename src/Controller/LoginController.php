<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */

class LoginController extends AbstractController
{

    /**
     * @Route("/", name="login")
     */
    public function index()
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    /**
     * @Route("/create", name="create_login", methods={"post"})
     */

    public function create(Request $request){

        $userEmail = $request->get('email');
        $userPassword = $request->get('password');

        return $this->redirectToRoute('account');



    }


}
