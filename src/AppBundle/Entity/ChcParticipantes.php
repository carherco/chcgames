<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChcParticipantes
 *
 * @ORM\Table(name="chc_participantes", indexes={@ORM\Index(name="id_partida", columns={"id_partida", "id_usuario"}), @ORM\Index(name="id_usuario", columns={"id_usuario"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChcParticipantesRepository")
 */
class ChcParticipantes
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
     * @var \AppBundle\Entity\ChcPartidas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ChcPartidas", inversedBy="participantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_partida", referencedColumnName="id")
     * })
     */
    private $partida;

    /**
     * @var \AppBundle\Entity\ChcUsuarios
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ChcUsuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $usuario;



    /**
     * Set partida
     *
     * @param integer $partida
     *
     * @return ChcParticipantes
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return integer
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * Set usuario
     *
     * @param integer $usuario
     *
     * @return ChcParticipantes
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return integer
     */
    public function getUsuario()
    {
        return $this->usuario;
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
