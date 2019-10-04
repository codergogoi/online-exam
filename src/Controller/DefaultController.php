<?php

namespace App\Controller;

use App\Services\ExamService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    public function __construct(ExamService $service)
    {
        $service->exams = ['FIB', 'MCQ', 'YESNO'];
    }

    /**
     * @Route("/default", name="default")
     */
    public function index(ExamService $service)
    {


        //Set Message

        $this->addFlash('notice','Exams are set');


        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'exams' => $service->exams
        ]);

    }
}
