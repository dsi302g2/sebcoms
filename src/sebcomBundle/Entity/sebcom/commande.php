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
     * @var string
     */
    private $etat;

    /**
     * @var float
     */
    private $total;

    /**
     * @var float
     */
    private $prixliv;

    /**
     * @var \DateTime
     */
    private $dateliv;

    /**
     * @var int
     */
    private $idliv;

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
     * Set etat
     *
     * @param string $etat
     *
     * @return commande
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return commande
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set prixliv
     *
     * @param float $prixliv
     *
     * @return commande
     */
    public function setPrixliv($prixliv)
    {
        $this->prixliv = $prixliv;

        return $this;
    }

    /**
     * Get prixliv
     *
     * @return float
     */
    public function getPrixliv()
    {
        return $this->prixliv;
    }

    /**
     * Set dateliv
     *
     * @param \DateTime $dateliv
     *
     * @return commande
     */
    public function setDateliv($dateliv)
    {
        $this->dateliv = $dateliv;

        return $this;
    }

    /**
     * Get dateliv
     *
     * @return \DateTime
     */
    public function getDateliv()
    {
        return $this->dateliv;
    }

    /**
     * Set idliv
     *
     * @param integer $idliv
     *
     * @return commande
     */
    public function setIdliv($idliv)
    {
        $this->idliv = $idliv;

        return $this;
    }

    /**
     * Get idliv
     *
     * @return int
     */
    public function getIdliv()
    {
        return $this->idliv;
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

