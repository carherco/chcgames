<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChcPartidas
 *
 * @ORM\Table(name="chc_partidas")
 * @ORM\Entity
 */
class ChcPartidas
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false, options={"default" : 0})
     */
    private $estado = 0;

    /**
     * @var \AppBundle\Entity\ChcUsuarios
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ChcUsuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id", nullable=false)
     * })
     */
    private $usuario;

    /**
     * @var \AppBundle\Entity\ChcJuegos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ChcJuegos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_juego", referencedColumnName="id", nullable=false)
     * })
     */
    private $juego;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="telegram_group_id", type="integer", nullable=true)
     */
    private $telegram_group_id;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return ChcPartidas
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return ChcPartidas
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
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
     * Set Usuario
     *
     * @param \AppBundle\Entity\ChcUsuarios $usuario
     *
     * @return ChcPartidas
     */
    public function setUsuario(\AppBundle\Entity\ChcUsuarios $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get Usuario
     *
     * @return \AppBundle\Entity\ChcUsuarios
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set Juego
     *
     * @param \AppBundle\Entity\ChcJuegos $juego
     *
     * @return ChcPartidas
     */
    public function setJuego(\AppBundle\Entity\ChcJuegos $juego = null)
    {
        $this->juego = $juego;

        return $this;
    }

    /**
     * Get Juego
     *
     * @return \AppBundle\Entity\ChcJuegos
     */
    public function getJuego()
    {
        return $this->juego;
    }
    
    public function getTelegramGroupId() {
        return $this->telegram_group_id;
    }

    public function setTelegramGroupId($telegram_group_id) {
        $this->telegram_group_id = $telegram_group_id;
        return $this;
    }


}
