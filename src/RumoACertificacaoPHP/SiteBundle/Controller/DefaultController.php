<?php

namespace RumoACertificacaoPHP\SiteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
	/**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('SiteBundle:Pages:home.html.twig');
    }
    /**
     * @Route("/who-we-are", name="who-we-are")
     */
    public function whoAction()
    {
        return $this->render('SiteBundle:Pages:who.html.twig');
    }

    /**
     * @Route("/change/{lang}", name="change-language")
     */
    public function changeLanguageAction($lang)
    {
        $this->get('session')->set('_locale', $lang);
        $referrerUrl = $this->get('request')->headers->get('referer');
        return $this->redirect($referrerUrl);
    }
}
