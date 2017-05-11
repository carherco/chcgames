<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KillComentarios
 *
 * @ORM\Table(name="kill_comentarios", indexes={@ORM\Index(name="id_noticia", columns={"id_noticia"}), @ORM\Index(name="id_jugador", columns={"id_jugador"})})
 * @ORM\Entity
 */
class KillComentarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_jugador", type="integer", nullable=true)
     */
    private $idJugador;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_noticia", type="integer", nullable=false)
     */
    private $idNoticia;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", nullable=false)
     */
    private $texto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idJugador
     *
     * @param integer $idJugador
     *
     * @return KillComentarios
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
     * Set idNoticia
     *
     * @param integer $idNoticia
     *
     * @return KillComentarios
     */
    public function setIdNoticia($idNoticia)
    {
        $this->idNoticia = $idNoticia;

        return $this;
    }

    /**
     * Get idNoticia
     *
     * @return integer
     */
    public function getIdNoticia()
    {
        return $this->idNoticia;
    }

    /**
     * Set texto
     *
     * @param string $texto
     *
     * @return KillComentarios
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return KillComentarios
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
