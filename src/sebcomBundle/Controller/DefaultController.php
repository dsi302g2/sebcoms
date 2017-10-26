<?php

namespace sebcomBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sebcomBundle\Entity\sebcom\compte;
use sebcomBundle\Entity\sebcom\Categorie;
use Symfony\Component\BrowserKit\Response;



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
                    return $this->render('sebcomBundle:Default:menu.html.twig',array('name'=> $user->getLogin()));
                }else{
                    return $this->render('sebcomBundle:Default:login.html.twig',array("error"=>"Mot De passe OU login Incorrect !"));
                }
                die();

        }else{
        return $this->render('sebcomBundle:Default:login.html.twig');
        }
    }
    public function menuAction(){


    }

    public function ajoutcatAction(){

        $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie') ;
        $cat=$em->findAll();
        if($cat){
            return $this->render('sebcomBundle:Default:ajoutcat.html.twig',array('cat'=> $cat));
        }else{
            return $this->render('sebcomBundle:Default:ajoutcat.html.twig',array("error"=>"Pas de categories!"));
        }
    }

    /**
     * @Route("/delete/{id}", name="categorie_delete")
     *
     * @return Response
     */
    public function deletecatAction(Categorie $categorie){
        $em= $this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        return $this->render('sebcomBundle:Default:delete.html.twig');


    }
    public function deletedAction(){
        return $this->render('sebcomBundle:Default:delete.html.twig');


    }


}
