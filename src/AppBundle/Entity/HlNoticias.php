<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HlNoticias
 *
 * @ORM\Table(name="hl_noticias", indexes={@ORM\Index(name="id_jugador", columns={"id_jugador"}), @ORM\Index(name="id_partida", columns={"id_partida"})})
 * @ORM\Entity
 */
class HlNoticias
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
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="noticia", type="text", nullable=false)
     */
    private $noticia;

    /**
     * @var string
     *
     * @ORM\Column(name="foto_noticia", type="string", length=255, nullable=false)
     */
    private $fotoNoticia;

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
     * @return HlNoticias
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
     * @return HlNoticias
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
     * @return HlNoticias
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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return HlNoticias
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set noticia
     *
     * @param string $noticia
     *
     * @return HlNoticias
     */
    public function setNoticia($noticia)
    {
        $this->noticia = $noticia;

        return $this;
    }

    /**
     * Get noticia
     *
     * @return string
     */
    public function getNoticia()
    {
        return $this->noticia;
    }

    /**
     * Set fotoNoticia
     *
     * @param string $fotoNoticia
     *
     * @return HlNoticias
     */
    public function setFotoNoticia($fotoNoticia)
    {
        $this->fotoNoticia = $fotoNoticia;

        return $this;
    }

    /**
     * Get fotoNoticia
     *
     * @return string
     */
    public function getFotoNoticia()
    {
        return $this->fotoNoticia;
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
