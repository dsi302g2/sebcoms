<?php

namespace sebcomBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sebcomBundle\Entity\sebcom\compte;
use sebcomBundle\Entity\sebcom\Categorie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
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
                    $session = new session();
                    $session->set('userSession',$user);
                    return $this->redirect('/menu');
                    die();
                }else{
                    return $this->render('sebcomBundle:Default:login.html.twig',array("error"=>"Mot De passe ou login Incorrect !"));
                }


        }else{
        return $this->render('sebcomBundle:Default:login.html.twig');
        }
    }
    public function menuAction(){
	    return $this->render('sebcomBundle:Default:menu.html.twig');
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

    /**
     * @Route("/modifier/{id}", name="categorie_modifier")
     *
     * @return Response
     */
    public function modifiercatAction($id)
    {
        if ($_POST) {

            $em = $this->getDoctrine()->getManager();
            $Categorie =  $em->getRepository('sebcomBundle\Entity\sebcom\Categorie')->find($id);
            $Categorie->setNom($_POST['nom']);
            if ($_POST['parent'] == 0) {
                $Categorie->setParentid(0);
            } else {
                $Categorie->setParentid($_POST['parent']);
            }
            $em->flush();
            return $this->render('sebcomBundle:Default:ajoutcat.html.twig');
        }
      /*  $em = $this->getDoctrine()->getManager();
        $sql = "SELECT p FROM sebcomBundle\Entity\sebcom\Categorie WHERE id != ?1";
        $query = $em->createQuery($sql);
        $query->setParameter(1, $id);
        $result = $query->getResult();
        var_dump($result);
        die();*/
        $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie');
        $cat = $ems->findAll();
        $categorie=$ems->findByid($id);
        $catname=$categorie[0]->getNom();
        $catparentid=$categorie[0]->getParentid();
        return $this->render('sebcomBundle:Default:modifiercat.html.twig', array('cat' => $cat,'id'=>$id,'catname'=>$catname,'catparentid'=>$catparentid));


    }

        public function ajoutarticleAction(){

            $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article') ;
            $art=$em->findAll();

            if($art){
                return $this->render('sebcomBundle:Default:ajoutarticle.html.twig',array('art'=> $art));
            }else{
return $this->render('sebcomBundle:Default:ajoutarticle.html.twig',array("error"=>"Pas d'article!"));
}
}

}
