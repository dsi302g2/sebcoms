<?php

namespace sebcomBundle\Entity\sebcom;

/**
 * promotion
 */
class promotion
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var \DateTime
     */
    private $datedebut;

    /**
     * @var \DateTime
     */
    private $datefin;

    /**
     * @var int
     */
    private $taux;

    /**
     * @var int
     */
    private $idarticle;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return promotion
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return promotion
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return promotion
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set taux
     *
     * @param integer $taux
     *
     * @return promotion
     */
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

    /**
     * Get taux
     *
     * @return int
     */
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * Set idarticle
     *
     * @param integer $idarticle
     *
     * @return promotion
     */
    public function setIdarticle($idarticle)
    {
        $this->idarticle = $idarticle;

        return $this;
    }

    /**
     * Get idarticle
     *
     * @return int
     */
    public function getIdarticle()
    {
        return $this->idarticle;
    }
}

