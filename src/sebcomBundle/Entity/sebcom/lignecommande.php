<?php

namespace sebcomBundle\Entity\sebcom;

/**
 * lignecommande
 */
class lignecommande
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idcommande;

    /**
     * @var int
     */
    private $idproduit;

    /**
     * @var int
     */
    private $quantite;

    /**
     * @var float
     */
    private $prixtot;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idcommande
     *
     * @param integer $idcommande
     *
     * @return lignecommande
     */
    public function setIdcommande($idcommande)
    {
        $this->idcommande = $idcommande;

        return $this;
    }

    /**
     * Get idcommande
     *
     * @return int
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * Set idproduit
     *
     * @param integer $idproduit
     *
     * @return lignecommande
     */
    public function setIdproduit($idproduit)
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    /**
     * Get idproduit
     *
     * @return int
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return lignecommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prixtot
     *
     * @param float $prixtot
     *
     * @return lignecommande
     */
    public function setPrixtot($prixtot)
    {
        $this->prixtot = $prixtot;

        return $this;
    }

    /**
     * Get prixtot
     *
     * @return float
     */
    public function getPrixtot()
    {
        return $this->prixtot;
    }
}

