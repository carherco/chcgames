<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DxJugadores
 *
 * @ORM\Table(name="dx_jugadores", indexes={@ORM\Index(name="id_partida", columns={"id_partida", "id_usuario"})})
 * @ORM\Entity
 */
class DxJugadores
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
     * @ORM\Column(name="id_partida", type="integer", nullable=true)
     */
    private $idPartida;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="storyteller", type="boolean", nullable=false, options={"default" : 0})
     */
    private $storyteller = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=false, options={"default" : 0})
     */
    private $score = '0';


    /**
     * Set idPartida
     *
     * @param integer $idPartida
     *
     * @return DxJugadores
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
     * Set idUsuario
     *
     * @param integer $idUsuario
     *
     * @return DxJugadores
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set storyteller
     *
     * @param boolean $storyteller
     *
     * @return DxJugadores
     */
    public function setStoryteller($storyteller)
    {
        $this->storyteller = $storyteller;

        return $this;
    }

    /**
     * Get storyteller
     *
     * @return boolean
     */
    public function getStoryteller()
    {
        return $this->storyteller;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return DxJugadores
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
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
