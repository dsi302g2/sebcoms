<?php

namespace sebcomBundle\Controller;
use sebcomBundle\Entity\sebcom\article;
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
                    $session->set('name',$user->getLogin());
                    $session->get('name');
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


    /*  ----------Categorie--------------------------  */



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
            $Categorie = $em->getRepository('sebcomBundle\Entity\sebcom\Categorie')->find($id);
            $Categorie->setNom($_POST['nom']);
            if ($_POST['parent'] == 0) {
                $Categorie->setParentid(0);
            } else {
                $Categorie->setParentid($_POST['parent']);
            }
            $em->flush();
            return $this->render('sebcomBundle:Default:ajoutcat.html.twig');
        }
        $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie');
        $cat = $ems->findAll();
        $categorie=$ems->findByid($id);
        $catname=$categorie[0]->getNom();
        $catparentid=$categorie[0]->getParentid();
        return $this->render('sebcomBundle:Default:modifiercat.html.twig', array('cat' => $cat,'id'=>$id,'catname'=>$catname,'catparentid'=>$catparentid));


    }

    /*  ----------Article--------------------------  */


    public function ajoutarticleAction(){

            if($_POST){
                $em=$this->getDoctrine()->getManager();
                $article= new article();
                $article->setNom($_POST['nom']);
                $article->setCategorie($_POST['categorie']);
                $article->setDescription($_POST['description']);
                $article->setPrix($_POST['prix']);
                $article->setImage($_POST['image']);
                $article->setQuantite($_POST['quantite']);

                $em->persist($article);
                $em->flush();
                $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article') ;
                $art=$em->findAll();
                if($art){
                    return $this->render('sebcomBundle:Default:ajoutarticle.html.twig',array('art'=> $art));
                }else{
                    return $this->render('sebcomBundle:Default:ajoutarticle.html.twig',array("error"=>"Pas de categories!"));
                }
            }

            else {
                $em = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article');
                $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie');
                $cat = $ems->findAll();
                $art = $em->findAll();

                if ($art) {
                    return $this->render('sebcomBundle:Default:ajoutarticle.html.twig', array('art' => $art, 'cat' => $cat));
                } else {
                    return $this->render('sebcomBundle:Default:ajoutarticle.html.twig', array("error" => "Pas d'article!"));
                }
            }

        }

    /**
     * @Route("/delete/{id}", name="article_delete")
     *
     * @return Response
     */
    public function deleteartAction(article $article){




        $em= $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();
        $ems= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article') ;
        $art=$ems->findAll();
        return $this->render('sebcomBundle:Default:ajoutarticle.html.twig',array('art'=> $art));


    }

    /**
     * @Route("/modifier/{id}", name="article_modifier")
     *
     * @return Response
     */

    public function modifierarticleAction($id)
    {
        if ($_POST) {

            $em = $this->getDoctrine()->getManager();
            $article = $em->getRepository('sebcomBundle\Entity\sebcom\article')->find($id);
            $article->setNom($_POST['nom']);
            $article->setCategorie($_POST['categorie']);
            $article->setDescription($_POST['description']);
            $article->setPrix($_POST['prix']);
            $article->setImage($_POST['image']);
            $article->setQuantite($_POST['quantite']);
            $em->flush();
            return $this->render('sebcomBundle:Default:ajoutarticle.html.twig');
        }
        $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article');
        $em=$this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie');
        $cat = $em->findAll();
        $article=$ems->findByid($id);
        $artname=$article[0]->getNom();
        $artcategorie=$article[0]->getCategorie();
        $artdescription=$article[0]->getDescription();
        $artprix=$article[0]->getPrix();
        $artimage=$article[0]->getImage();
        $artquantite=$article[0]->getQuantite();
        return $this->render('sebcomBundle:Default:modifierarticle.html.twig', array('cat' => $cat,'id'=>$id,'artname'=>$artname,'artcategorie'=>$artcategorie,'artdescription'=>$artdescription,'artprix'=>$artprix,'artimage'=>$artimage,'artquantite'=>$artquantite));


    }




}
