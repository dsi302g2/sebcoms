<?php

namespace sebcomBundle\Controller;
use sebcomBundle\Entity\sebcom\article;
use sebcomBundle\Entity\sebcom\commande;
use sebcomBundle\Entity\sebcom\lignecommande;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sebcomBundle\Entity\sebcom\compte;
use sebcomBundle\Entity\sebcom\Categorie;
use sebcomBundle\Entity\sebcom\livreur;
use sebcomBundle\Entity\sebcom\client;
use sebcomBundle\Entity\sebcom\promotion;
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
                    return $this->render('sebcomBundle:Default:login.html.twig',array("error"=>" login Incorrect !"));
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
        $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie');
        $cat = $ems->findAll();
        for ($i = 0; $i <= sizeof($cat)-1; $i++) {

            if ($cat[$i]->getParentid() == $categorie->getId()) {
            $cat[$i]->setParentid(0);

            }
        }
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
            $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie');
            $cat = $ems->findAll();
            $em = $this->getDoctrine()->getManager();
            $Categorie = $em->getRepository('sebcomBundle\Entity\sebcom\Categorie')->find($id);
            $Categorie->setNom($_POST['nom']);
            if ($_POST['parent'] == 0) {
                $Categorie->setParentid(0);
            } else {
                $Categorie->setParentid($_POST['parent']);
            }
            $em->flush();
            return $this->render('sebcomBundle:Default:ajoutcat.html.twig', array('cat' => $cat));
        }
        $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie');
        $cat = $ems->findAll();
        $categorie=$ems->findByid($id);
        $catname=$categorie[0]->getNom();
        $catparentid=$categorie[0]->getParentid();
        return $this->render('sebcomBundle:Default:ajoutcat.html.twig', array('cat' => $cat,'id'=>$id,'catname'=>$catname,'catparentid'=>$catparentid));


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

                $emss = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie');
                $cat = $emss->findAll();

                $em->persist($article);
                $em->flush();
                $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article') ;
                $art=$em->findAll();
                if($art){
                    return $this->render('sebcomBundle:Default:ajoutarticle.html.twig',array('art'=> $art,'cat' => $cat));
                }else{
                    return $this->render('sebcomBundle:Default:ajoutarticle.html.twig',array("error"=>"Pas de categories!"));
                }
            }

            else {
                $em = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article');
                $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie');
                $cat = $ems->findAll();
                $art = $em->findAll();

                if ($cat) {
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
            $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article');
            $em = $this->getDoctrine()->getManager();
            $art = $ems->findAll();
            $article = $em->getRepository('sebcomBundle\Entity\sebcom\article')->find($id);
            $article->setNom($_POST['nom']);
            $article->setCategorie($_POST['categorie']);
            $article->setDescription($_POST['description']);
            $article->setPrix($_POST['prix']);
            $article->setImage($_POST['image']);
            $article->setQuantite($_POST['quantite']);
            $em->flush();
            return $this->render('sebcomBundle:Default:ajoutarticle.html.twig',array('art'=>$art));
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
        return $this->render('sebcomBundle:Default:ajoutarticle.html.twig', array('cat' => $cat,'id'=>$id,'artname'=>$artname,'artcategorie'=>$artcategorie,'artdescription'=>$artdescription,'artprix'=>$artprix,'artimage'=>$artimage,'artquantite'=>$artquantite));


    }

    /*  ----------Livreur--------------------------  */
    public function ajoutlivreurAction(){

        if($_POST){
            $em=$this->getDoctrine()->getManager();
            $livreur= new livreur();
            $livreur->setNom($_POST['nom']);
            $livreur->setVehicule($_POST['vehicule']);
            $livreur->setNumtel($_POST['numtel']);

            $em->persist($livreur);
            $em->flush();
            $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\livreur') ;
            $liv=$em->findAll();
            if($liv){
                return $this->render('sebcomBundle:Default:ajoutlivreur.html.twig',array('liv'=> $liv));
            }else{
                return $this->render('sebcomBundle:Default:ajoutlivreur.html.twig',array("error"=>"Pas de livreur!"));
            }
        }

        else {
            $em = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\livreur');
            $liv = $em->findAll();

            if ($liv) {
                return $this->render('sebcomBundle:Default:ajoutlivreur.html.twig', array('liv' => $liv));
            } else {
                return $this->render('sebcomBundle:Default:ajoutlivreur.html.twig', array("error" => "Pas de livreur!"));
            }
        }

    }

    /**
     * @Route("/modifier/{id}", name="livreur_modifier")
     *
     * @return Response
     */

    public function modifierlivreurAction($id)
    {
        if ($_POST) {
            $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\livreur');
            $liv=$ems->findAll();
            $em = $this->getDoctrine()->getManager();
            $livreur = $em->getRepository('sebcomBundle\Entity\sebcom\livreur')->find($id);
            $livreur->setNom($_POST['nom']);
            $livreur->setVehicule($_POST['vehicule']);
            $livreur->setNumtel($_POST['numtel']);
            $em->flush();
            return $this->render('sebcomBundle:Default:ajoutlivreur.html.twig',array('liv'=>$liv));
        }
        $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\livreur');
        $liv=$ems->findByid($id);
        $livreur=$ems->findAll();
        $livname=$liv[0]->getName();
        $livvehicule=$liv[0]->getVehicule();
        $livtel=$liv[0]->getLivtel();
        return $this->render('sebcomBundle:Default:ajoutlivreur.html.twig', array('liv' => $livreur,'id'=>$id,'livname'=>$livname,'livvehicule'=>$livvehicule,'livtel'=>$livtel));


    }



    /**
     * @Route("/delete/{id}", name="livreur_delete")
     *
     * @return Response
     */
    public function deletelivreurAction(livreur $livreur){




        $em= $this->getDoctrine()->getManager();
        $em->remove($livreur);
        $em->flush();
        $ems= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\livreur') ;
        $liv=$ems->findAll();
        return $this->render('sebcomBundle:Default:ajoutlivreur.html.twig',array('liv'=> $liv));


    }



    /*  ----------Commande--------------------------  */

    public function gestioncommandeAction(){

        $em = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\commande');
            $com = $em->findAll();
        $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\compte');
        $clt = $ems->findAll();
        $emss = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\livreur');
        $liv = $emss->findAll();

            if ($com) {
                return $this->render('sebcomBundle:Default:gestioncommande.html.twig', array('com' => $com,'clt' => $clt,'liv' =>$liv));
            } else {
                return $this->render('sebcomBundle:Default:gestioncommande.html.twig', array("error" => "Pas de commande!"));
            }
        }



    /*  ----------Promotion--------------------------  */

    public function promotionAction()
    {


        if ($_POST) {
            $em = $this->getDoctrine()->getManager();
            $promotion = new promotion();
            $promotion->setTitre($_POST['titre']);
            $promotion->setDatedebut(new \DateTime($_POST['datedebut']));
            $promotion->setDatefin(new \DateTime($_POST['datefin']));
            $promotion->setTaux($_POST['taux']);
            $promotion->setIdarticle($_POST['idarticle']);
            $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article');
            $art = $ems->findAll();

            $em->persist($promotion);
            $em->flush();
            $em = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\promotion');
            $pro = $em->findAll();
            if ($pro) {
                return $this->render('sebcomBundle:Default:promotion.html.twig', array('pro' => $pro,'art' => $art));
            } else {
                return $this->render('sebcomBundle:Default:promotion.html.twig', array("error" => "Pas de Promotion!"));
            }
        } else {

            $em = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\promotion');
            $pro = $em->findAll();

            $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article');
            $art = $ems->findAll();



            if ($pro) {
                return $this->render('sebcomBundle:Default:promotion.html.twig', array('pro' => $pro,'art' => $art));
            }
            else {
                return $this->render('sebcomBundle:Default:promotion.html.twig', array("error" => "Pas de Promotion!"));
            }
            if ($art) {
                return $this->render('sebcomBundle:Default:promotion.html.twig', array('pro' => $pro,'art' => $art));
            }
        }

    }

    /**
     * @Route("/delete/{id}", name="promotion_delete")
     *
     * @return Response
     */
    public function deletepromotionAction(promotion $promotion){




        $em= $this->getDoctrine()->getManager();
        $em->remove($promotion);
        $em->flush();
        $ems= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\promotion') ;
        $pro=$ems->findAll();
        $emss = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article');
        $art = $emss->findAll();
        return $this->render('sebcomBundle:Default:promotion.html.twig',array('pro'=> $pro , 'art'=>$art));


    }


    /**
     * @Route("/modifier/{id}", name="promotion_modifier")
     *
     * @return Response
     */

    public function modifierpromotionAction($id)
    {
        if ($_POST) {
            $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\promotion');
            $pro=$ems->findAll();
            $em = $this->getDoctrine()->getManager();
            $promotion = $em->getRepository('sebcomBundle\Entity\sebcom\promotion')->find($id);
            $promotion->setTitre($_POST['titre']);
            $promotion->setDatedebut(new \DateTime($_POST['datedebut']));
            $promotion->setDatefin(new \DateTime($_POST['datefin']));
            $promotion->setTaux($_POST['taux']);
            $promotion->setIdarticle($_POST['idarticle']);
            $em->flush();

            $emss = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article');
            $art = $emss->findAll();
            return $this->render('sebcomBundle:Default:promotion.html.twig',array('pro'=>$pro,'art' => $art));
        }
        $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\livreur');
        $liv=$ems->findByid($id);
        $livreur=$ems->findAll();
        $livname=$liv[0]->getName();
        $livvehicule=$liv[0]->getVehicule();
        $livtel=$liv[0]->getLivtel();
        return $this->render('sebcomBundle:Default:promotion.html.twig', array('liv' => $livreur,'id'=>$id,'livname'=>$livname,'livvehicule'=>$livvehicule,'livtel'=>$livtel));

    }


    public function clientAction()
    {
        if($_GET){
            return $this->render('sebcomBundle:Default:homeclient.html.twig', array('log' =>$_GET['log']));
        }
        if ($_POST) {
            $em = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\client');
            $client = $em->findOneBy(array('login' => $_POST['login'], 'pass' => $_POST['pass']));
            if ($client) {
                $session = new session();
                $session->set('name', $client->getLogin());
                $session->get('name');
                return $this->render('sebcomBundle:Default:homeclient.html.twig', array("key" =>$client));
                die();
            } else {
                return $this->render('sebcomBundle:Default:homeclient.html.twig', array("error" => " login Incorrect !"));
            }
        }
        else{
            return $this->render('sebcomBundle:Default:homeclient.html.twig');
        }


    }
    /**
     * @Route("/signup", name="client_ajouter")
     *
     * @return Response
     */

    /*  ----------Sign Up Client--------------------------  */
    public function ajoutclientAction(){

        if($_POST){
            $em=$this->getDoctrine()->getManager();
            $client= new client();
            $client->setNom($_POST['nom']);
            $client->setPrenom($_POST['prenom']);
            $client->setLogin($_POST['login']);
            $client->setPass($_POST['pass']);
            $client->setAdresse($_POST['adresse']);
            $client->setTel($_POST['tel']);
            $client->setEmail($_POST['email']);
            $em->persist($client);
            $em->flush();
            return $this->render('sebcomBundle:Default:homeclient.html.twig', array("msg" => " Vous pouvez connectez maintenant"));

        }
        else{
            return $this->render('sebcomBundle:Default:homeclient.html.twig');
        }

    }


    /************listearticle**********/
    public function listearticleAction()
    {


        if($_GET) {
            $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article') ;
            $art=$em->findBycategorie($_GET['cat']);
            $e= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\client') ;
            $log=$e->findByid(1);
            $ems= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie') ;
            $cat=$ems->findAll();

            if($art && $_GET['cat']!='0'){
                return $this->render('sebcomBundle:Default:listearticle.html.twig',array('art'=> $art,'cat'=>$cat,'log'=>$log));
            }
            else{
                $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article') ;
                $art=$em->findAll();
                return $this->render('sebcomBundle:Default:listearticle.html.twig',array('art'=> $art,'cat'=>$cat,'log'=>$_GET['log']));
            }


        }
        else{
            $em= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article') ;
            $art=$em->findAll();
            $ems= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\Categorie') ;
            $cat=$ems->findAll();

            return $this->render('sebcomBundle:Default:listearticle.html.twig',array('art'=> $art,'cat'=>$cat));
        }

    }


    public function contactAction()
    {

            return $this->render('sebcomBundle:Default:contact.html.twig');


    }


    /**
     * @Route("/modifier/{id}", name="client_modifier")
     *
     * @return Response
     */
    public function modifierclientAction($id)
    {
        if ($_POST) {
            $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\client');
            $em = $this->getDoctrine()->getManager();
            $art = $ems->findAll();
            $client = $em->getRepository('sebcomBundle\Entity\sebcom\client')->find($id);
            $client->setAdresse($_POST['adresse']);
            $client->setTel($_POST['tel']);
            $client->setPass($_POST['pass']);
            $em->flush();
            return $this->render('sebcomBundle:Default:homeclient.html.twig',array('art'=>$art));
        }
        $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article');
        $client=$ems->findByid($id);
        $artadresse=$client[0]->getAdresse();
        $arttel=$client[0]->getTel();
        $artpass=$client[0]->getPass();

        return $this->render('sebcomBundle:Default:homeclient.html.twig', array('adresse'=>$artadresse,'tel'=>$arttel,'pass'=>$artpass));

    }
    /************Panier**********/
    /**
     * @Route("/commander/{arts}", name="commande_confirmer")
     *
     * @return Response
     */
    /***********confirmer commande***************/
    public function commanderAction($arts){

        $ems = $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\article');
        $art = $ems->findAll();
        $emss=$this->getDoctrine()->getManager();
        $commande= new commande();
        $commande->setDate(new \DateTime('now'));
        $commande->setEtat("En Attente");
        $commande->setTotal(0);
        $commande->setPrixliv(0);
        $commande->setDateliv(new \DateTime('2000-00-00'));
        $commande->setIdliv(0);
        $commande->setIdclient(1);
        $emss->persist($commande);
        /*9
        $lignecommande = new lignecommande();
        $lignecommande->setIdcommande();
        $lignecommande->setIdproduit();
        $lignecommande->setQuantite();
        $lignecommande->setPrixtot();
        $emss->persist($lignecommande);*/
        $emss->flush();
        return $this->render('sebcomBundle:Default:listearticle.html.twig', array("msg" => " Votre commande est bien enregistrer!"));

    }
    /**
     * @Route("/delete/{id}", name="commande_delete")
     *
     * @return Response
     */
    public function deletecommandeAction(commande $commande){

        $em= $this->getDoctrine()->getManager();
        $em->remove($commande);
        $em->flush();
        $ems= $this->getDoctrine()->getRepository('sebcomBundle\Entity\sebcom\commande') ;
        $cmd=$ems->findAll();
        return $this->render('sebcomBundle:Default:gestioncommande.html.twig',array('commande'=> $cmd));


    }

}
