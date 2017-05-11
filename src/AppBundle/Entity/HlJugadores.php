<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HlJugadores
 *
 * @ORM\Table(name="hl_jugadores", indexes={@ORM\Index(name="hombrelobo", columns={"hombrelobo", "alcalde", "vidente", "enamorado", "bruja", "cazador", "guardaespaldas", "endemoniado"}), @ORM\Index(name="id_partida", columns={"id_partida", "id_usuario"})})
 * @ORM\Entity
 */
class HlJugadores
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
     * @ORM\Column(name="activo", type="boolean", nullable=false, options={"default" : 1})
     */
    private $activo = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hombrelobo", type="boolean", nullable=false, options={"default" : 0})
     */
    private $hombrelobo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="alcalde", type="boolean", nullable=false, options={"default" : 0})
     */
    private $alcalde = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="vidente", type="boolean", nullable=false, options={"default" : 0})
     */
    private $vidente = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="enamorado", type="integer", nullable=false, options={"default" : 0})
     */
    private $enamorado = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="bruja", type="boolean", nullable=false, options={"default" : 0})
     */
    private $bruja = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="cazador", type="boolean", nullable=false, options={"default" : 0})
     */
    private $cazador = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="guardaespaldas", type="boolean", nullable=false, options={"default" : 0})
     */
    private $guardaespaldas = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="endemoniado", type="boolean", nullable=false, options={"default" : 0})
     */
    private $endemoniado = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hipnotizador", type="boolean", nullable=false, options={"default" : 0})
     */
    private $hipnotizador = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="enfermo", type="boolean", nullable=false, options={"default" : 0})
     */
    private $enfermo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="protegido", type="boolean", nullable=false, options={"default" : 0})
     */
    private $protegido = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hipnotizado", type="boolean", nullable=false, options={"default" : 0})
     */
    private $hipnotizado = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="accion", type="boolean", nullable=false, options={"default" : 0})
     */
    private $accion = '0';

    
    /**
     * Set idPartida
     *
     * @param integer $idPartida
     *
     * @return HlJugadores
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
     * @return HlJugadores
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
     * Set activo
     *
     * @param boolean $activo
     *
     * @return HlJugadores
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

    /**
     * Set hombrelobo
     *
     * @param boolean $hombrelobo
     *
     * @return HlJugadores
     */
    public function setHombrelobo($hombrelobo)
    {
        $this->hombrelobo = $hombrelobo;

        return $this;
    }

    /**
     * Get hombrelobo
     *
     * @return boolean
     */
    public function getHombrelobo()
    {
        return $this->hombrelobo;
    }

    /**
     * Set alcalde
     *
     * @param boolean $alcalde
     *
     * @return HlJugadores
     */
    public function setAlcalde($alcalde)
    {
        $this->alcalde = $alcalde;

        return $this;
    }

    /**
     * Get alcalde
     *
     * @return boolean
     */
    public function getAlcalde()
    {
        return $this->alcalde;
    }

    /**
     * Set vidente
     *
     * @param boolean $vidente
     *
     * @return HlJugadores
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
     * Set enamorado
     *
     * @param integer $enamorado
     *
     * @return HlJugadores
     */
    public function setEnamorado($enamorado)
    {
        $this->enamorado = $enamorado;

        return $this;
    }

    /**
     * Get enamorado
     *
     * @return integer
     */
    public function getEnamorado()
    {
        return $this->enamorado;
    }

    /**
     * Set bruja
     *
     * @param boolean $bruja
     *
     * @return HlJugadores
     */
    public function setBruja($bruja)
    {
        $this->bruja = $bruja;

        return $this;
    }

    /**
     * Get bruja
     *
     * @return boolean
     */
    public function getBruja()
    {
        return $this->bruja;
    }

    /**
     * Set cazador
     *
     * @param boolean $cazador
     *
     * @return HlJugadores
     */
    public function setCazador($cazador)
    {
        $this->cazador = $cazador;

        return $this;
    }

    /**
     * Get cazador
     *
     * @return boolean
     */
    public function getCazador()
    {
        return $this->cazador;
    }

    /**
     * Set guardaespaldas
     *
     * @param boolean $guardaespaldas
     *
     * @return HlJugadores
     */
    public function setGuardaespaldas($guardaespaldas)
    {
        $this->guardaespaldas = $guardaespaldas;

        return $this;
    }

    /**
     * Get guardaespaldas
     *
     * @return boolean
     */
    public function getGuardaespaldas()
    {
        return $this->guardaespaldas;
    }

    /**
     * Set endemoniado
     *
     * @param boolean $endemoniado
     *
     * @return HlJugadores
     */
    public function setEndemoniado($endemoniado)
    {
        $this->endemoniado = $endemoniado;

        return $this;
    }

    /**
     * Get endemoniado
     *
     * @return boolean
     */
    public function getEndemoniado()
    {
        return $this->endemoniado;
    }

    /**
     * Set hipnotizador
     *
     * @param boolean $hipnotizador
     *
     * @return HlJugadores
     */
    public function setHipnotizador($hipnotizador)
    {
        $this->hipnotizador = $hipnotizador;

        return $this;
    }

    /**
     * Get hipnotizador
     *
     * @return boolean
     */
    public function getHipnotizador()
    {
        return $this->hipnotizador;
    }

    /**
     * Set enfermo
     *
     * @param boolean $enfermo
     *
     * @return HlJugadores
     */
    public function setEnfermo($enfermo)
    {
        $this->enfermo = $enfermo;

        return $this;
    }

    /**
     * Get enfermo
     *
     * @return boolean
     */
    public function getEnfermo()
    {
        return $this->enfermo;
    }

    /**
     * Set protegido
     *
     * @param boolean $protegido
     *
     * @return HlJugadores
     */
    public function setProtegido($protegido)
    {
        $this->protegido = $protegido;

        return $this;
    }

    /**
     * Get protegido
     *
     * @return boolean
     */
    public function getProtegido()
    {
        return $this->protegido;
    }

    /**
     * Set hipnotizado
     *
     * @param boolean $hipnotizado
     *
     * @return HlJugadores
     */
    public function setHipnotizado($hipnotizado)
    {
        $this->hipnotizado = $hipnotizado;

        return $this;
    }

    /**
     * Get hipnotizado
     *
     * @return boolean
     */
    public function getHipnotizado()
    {
        return $this->hipnotizado;
    }

    /**
     * Set accion
     *
     * @param boolean $accion
     *
     * @return HlJugadores
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;

        return $this;
    }

    /**
     * Get accion
     *
     * @return boolean
     */
    public function getAccion()
    {
        return $this->accion;
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
