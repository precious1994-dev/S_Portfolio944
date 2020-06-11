<?php

namespace App\Controller\FrontOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller\FrontOffice
 *
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function default(Request $request)
    {
        return $this->render("front_office/home.html.twig");
    }

    /**
     * List all formation
     *@Route("/list_formation", name="formation")
     */
    public function listFormation(Request $request){
        return $this->render("front_office/formation.html.twig");
    }
    /**
     * List all skill
     *@Route("/list_skill", name="skill")
     */
    public function list_skill(Request $request){
        return $this->render("front_office/skill.html.twig");
    }

    /**
     * List all referance
     *@Route("/list_reference", name="reference")
     */
    public function list_referance(Request $request){
        return $this->render("front_office/reference.html.twig");
    }
}
