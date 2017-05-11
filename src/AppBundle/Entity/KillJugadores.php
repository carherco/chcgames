<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KillJugadores
 *
 * @ORM\Table(name="kill_jugadores", indexes={@ORM\Index(name="id_departamento", columns={"id_departamento"}), @ORM\Index(name="id_victima", columns={"id_victima"})})
 * @ORM\Entity
 */
class KillJugadores
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
     * @ORM\Column(name="nombre", type="string", length=40, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_departamento", type="integer", nullable=false)
     */
    private $idDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=40, nullable=false)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255, nullable=false)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_victima", type="integer", nullable=true)
     */
    private $idVictima;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confirmacion_muerte", type="boolean", nullable=false, options={"default" : 0})
     */
    private $confirmacionMuerte = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false, options={"default" : 1})
     */
    private $activo = '1';


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return KillJugadores
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
     * Set idDepartamento
     *
     * @param integer $idDepartamento
     *
     * @return KillJugadores
     */
    public function setIdDepartamento($idDepartamento)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return integer
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return KillJugadores
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return KillJugadores
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return KillJugadores
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set idVictima
     *
     * @param integer $idVictima
     *
     * @return KillJugadores
     */
    public function setIdVictima($idVictima)
    {
        $this->idVictima = $idVictima;

        return $this;
    }

    /**
     * Get idVictima
     *
     * @return integer
     */
    public function getIdVictima()
    {
        return $this->idVictima;
    }

    /**
     * Set confirmacionMuerte
     *
     * @param boolean $confirmacionMuerte
     *
     * @return KillJugadores
     */
    public function setConfirmacionMuerte($confirmacionMuerte)
    {
        $this->confirmacionMuerte = $confirmacionMuerte;

        return $this;
    }

    /**
     * Get confirmacionMuerte
     *
     * @return boolean
     */
    public function getConfirmacionMuerte()
    {
        return $this->confirmacionMuerte;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return KillJugadores
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

}
