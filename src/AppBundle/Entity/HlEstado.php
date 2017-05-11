<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HlEstado
 *
 * @ORM\Table(name="hl_estado", indexes={@ORM\Index(name="id_partida", columns={"id_partida"})})
 * @ORM\Entity
 */
class HlEstado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_partida", type="integer", nullable=false)
     */
    private $idPartida;

    /**
     * @var integer
     *
     * @ORM\Column(name="ronda", type="integer", nullable=false)
     */
    private $ronda;

    /**
     * @var string
     *
     * @ORM\Column(name="fase", type="string", length=10, nullable=false)
     */
    private $fase;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vidente", type="boolean", nullable=false)
     */
    private $vidente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pocion_vida", type="boolean", nullable=false, options={"default" : 0})
     */
    private $pocionVida = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pocion_muerte", type="boolean", nullable=false, options={"default" : 0})
     */
    private $pocionMuerte = '0';


    /**
     * Set idPartida
     *
     * @param integer $idPartida
     *
     * @return HlEstado
     */
    public function setIdPartida($idPartida)
    {
        $this->idPartida = $idPartida;

        return $this;
    }

    /**
     * Get idPartida
     *
     * @return integer
     */
    public function getIdPartida()
    {
        return $this->idPartida;
    }

    /**
     * Set ronda
     *
     * @param integer $ronda
     *
     * @return HlEstado
     */
    public function setRonda($ronda)
    {
        $this->ronda = $ronda;

        return $this;
    }

    /**
     * Get ronda
     *
     * @return integer
     */
    public function getRonda()
    {
        return $this->ronda;
    }

    /**
     * Set fase
     *
     * @param string $fase
     *
     * @return HlEstado
     */
    public function setFase($fase)
    {
        $this->fase = $fase;

        return $this;
    }

    /**
     * Get fase
     *
     * @return string
     */
    public function getFase()
    {
        return $this->fase;
    }

    /**
     * Set vidente
     *
     * @param boolean $vidente
     *
     * @return HlEstado
     */
    public function setVidente($vidente)
    {
        $this->vidente = $vidente;

        return $this;
    }

    /**
     * Get vidente
     *
     * @return boolean
     */
    public function getVidente()
    {
        return $this->vidente;
    }

    /**
     * Set pocionVida
     *
     * @param boolean $pocionVida
     *
     * @return HlEstado
     */
    public function setPocionVida($pocionVida)
    {
        $this->pocionVida = $pocionVida;

        return $this;
    }

    /**
     * Get pocionVida
     *
     * @return boolean
     */
    public function getPocionVida()
    {
        return $this->pocionVida;
    }

    /**
     * Set pocionMuerte
     *
     * @param boolean $pocionMuerte
     *
     * @return HlEstado
     */
    public function setPocionMuerte($pocionMuerte)
    {
        $this->pocionMuerte = $pocionMuerte;

        return $this;
    }

    /**
     * Get pocionMuerte
     *
     * @return boolean
     */
    public function getPocionMuerte()
    {
        return $this->pocionMuerte;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
