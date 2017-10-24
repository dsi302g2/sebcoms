<?php

namespace sebcomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sebcomBundle\Entity\compte;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('sebcomBundle:Default:index.html.twig');
    }
	public function showAction()
	{	
		$em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\compte');
		$comptes= $em->findAll();		
		var_dump($comptes);
		die();
	}
	public function loginAction(){
        if($_POST){
                var_dump($_POST);
                die();
        }else{
        return $this->render('sebcomBundle:Default:login.html.twig');
        }
    }
}
