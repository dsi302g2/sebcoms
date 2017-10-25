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
                $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\compte');
                $user=$em->findOneBy(array('login'=>$_POST['Pseudo'],'password'=>$_POST['Password']));
                if($user){
                    return $this->render('sebcomBundle:Default:menu.html.twig');
                }else{
                    return $this->render('sebcomBundle:Default:login.html.twig',array("error"=>"Mot De passe OU login Incorrect !"));
                }
                die();

        }else{
        return $this->render('sebcomBundle:Default:login.html.twig');
        }
    }
    public function menuAction(){

            return $this->render('sebcomBundle:Default:menu.html.twig');

    }
    public function ajoutcatAction(){
        return $this->render('sebcomBundle:Default:ajoutcat.html.twig');

    }

}
