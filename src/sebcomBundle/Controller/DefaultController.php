<?php

namespace sebcomBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sebcomBundle\Entity\sebcom\compte;
use sebcomBundle\Entity\sebcom\Categorie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;







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
        if($_POST){
            $em=$this->getDoctrine()->getManager();
        $Categorie= new Categorie();
        $Categorie->setNom($_POST['nom']);
        if($_POST['parent']==0){
            $Categorie->setParentid(0);
        }else{
            $Categorie->setParentid($_POST['parent']);
        }
        $em->persist($Categorie);
        $em->flush();
            $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie') ;
            $cat=$em->findAll();
            if($cat){
                return $this->render('sebcomBundle:Default:ajoutcat.html.twig',array('cat'=> $cat));
            }else{
                return $this->render('sebcomBundle:Default:ajoutcat.html.twig',array("error"=>"Pas de categories!"));
            }
        }else{
        $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie') ;
        $cat=$em->findAll();
        if($cat){
            return $this->render('sebcomBundle:Default:ajoutcat.html.twig',array('cat'=> $cat));
        }else{
            return $this->render('sebcomBundle:Default:ajoutcat.html.twig',array("error"=>"Pas de categories!"));
        }
        }
        return $this->render('sebcomBundle:Default:ajoutcat.html.twig');


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
        $ems= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie') ;
        $cat=$ems->findAll();
        return $this->render('sebcomBundle:Default:ajoutcat.html.twig',array('cat'=> $cat));


    }
    public function deletedAction(){
        $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie') ;
        $cat=$em->findAll();
        if($cat){
            return $this->render('sebcomBundle:Default:ajoutcat.html.twig',array('cat'=> $cat));
        }else{
            return $this->render('sebcomBundle:Default:ajoutcat.html.twig',array("error"=>"Pas de categories!"));
        }
        return $this->render('sebcomBundle:Default:ajoutcat.html.twig',array('cat'=> $cat));


    }


}
