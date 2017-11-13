<?php

namespace sebcomBundle\Entity\sebcom;

/**
 * commande
 */
class commande
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var float
     */
    private $prixttc;

    /**
     * @var int
     */
    private $idlivreur;

    /**
     * @var int
     */
    private $idclient;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return commande
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set prixttc
     *
     * @param float $prixttc
     *
     * @return commande
     */
    public function setPrixttc($prixttc)
    {
        $this->prixttc = $prixttc;

        return $this;
    }

    /**
     * Get prixttc
     *
     * @return float
     */
    public function getPrixttc()
    {
        return $this->prixttc;
    }

    /**
     * Set idlivreur
     *
     * @param integer $idlivreur
     *
     * @return commande
     */
    public function setIdlivreur($idlivreur)
    {
        $this->idlivreur = $idlivreur;

        return $this;
    }

    /**
     * Get idlivreur
     *
     * @return int
     */
    public function getIdlivreur()
    {
        return $this->idlivreur;
    }

    /**
     * Set idclient
     *
     * @param integer $idclient
     *
     * @return commande
     */
    public function setIdclient($idclient)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return int
     */
    public function getIdclient()
    {
        return $this->idclient;
    }
}

