<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HlVotos
 *
 * @ORM\Table(name="hl_votos")
 * @ORM\Entity
 */
class HlVotos
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
     * @ORM\Column(name="id_ronda", type="integer", nullable=false)
     */
    private $ronda;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_jugador", type="integer", nullable=false)
     */
    private $jugador;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_victima", type="integer", nullable=false)
     */
    private $victima;

    /**
     * @var \AppBundle\Entity\ChcPartidas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ChcPartidas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_partida", referencedColumnName="id")
     * })
     */
    private $partida;



    /**
     * Set ronda
     *
     * @param integer $ronda
     *
     * @return HlVotos
     */
    public function setIdRonda($ronda)
    {
        $this->ronda = $ronda;

        return $this;
    }

    /**
     * Get ronda
     *
     * @return integer
     */
    public function getIdRonda()
    {
        return $this->ronda;
    }

    /**
     * Set jugador
     *
     * @param integer $jugador
     *
     * @return HlVotos
     */
    public function setIdJugador($jugador)
    {
        $this->jugador = $jugador;

        return $this;
    }

    /**
     * Get jugador
     *
     * @return integer
     */
    public function getIdJugador()
    {
        return $this->jugador;
    }

    /**
     * Set victima
     *
     * @param integer $victima
     *
     * @return HlVotos
     */
    public function setIdVictima($victima)
    {
        $this->victima = $victima;

        return $this;
    }

    /**
     * Get victima
     *
     * @return integer
     */
    public function getIdVictima()
    {
        return $this->victima;
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

    /**
     * Set partida
     *
     * @param \AppBundle\Entity\ChcPartidas $partida
     *
     * @return HlVotos
     */
    public function setIdPartida(\AppBundle\Entity\ChcPartidas $partida = null)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return \AppBundle\Entity\ChcPartidas
     */
    public function getIdPartida()
    {
        return $this->partida;
    }
}
