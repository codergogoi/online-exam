<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SignupController extends AbstractController
{
    /**
     * @Route("/signup", name="signup")
     */
    public function index()
    {
        return $this->render('signup/index.html.twig', [
            'controller_name' => 'SignupController',
        ]);
    }


    /**
     * @Route("/create", name="create_user", methods={"post"})
     *
     */
    public function createUser(Request $request){

        $userName = $request->get('name');
        $useEmail = $request->get('email');
        $password = $request->get('password');

        $this->addFlash('success','Successfully Created User!');

        return $this->redirectToRoute('account');

    }

}
