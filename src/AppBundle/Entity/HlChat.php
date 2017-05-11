<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HlChat
 *
 * @ORM\Table(name="hl_chat", indexes={@ORM\Index(name="id_jugador", columns={"id_jugador"}), @ORM\Index(name="id_partida", columns={"id_partida"})})
 * @ORM\Entity
 */
class HlChat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_partida", type="integer", nullable=false)
     */
    private $idPartida;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_jugador", type="integer", nullable=true)
     */
    private $idJugador;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="string", length=255, nullable=false)
     */
    private $mensaje;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idPartida
     *
     * @param integer $idPartida
     *
     * @return HlChat
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
     * Set idJugador
     *
     * @param integer $idJugador
     *
     * @return HlChat
     */
    public function setIdJugador($idJugador)
    {
        $this->idJugador = $idJugador;

        return $this;
    }

    /**
     * Get idJugador
     *
     * @return integer
     */
    public function getIdJugador()
    {
        return $this->idJugador;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return HlChat
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return HlChat
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
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
