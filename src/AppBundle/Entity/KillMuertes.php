<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KillMuertes
 *
 * @ORM\Table(name="kill_muertes")
 * @ORM\Entity
 */
class KillMuertes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_asesino", type="integer", nullable=false)
     */
    private $idAsesino;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_victima", type="integer", nullable=false)
     */
    private $idVictima;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_muerte", type="datetime", nullable=false)
     */
    private $fechaMuerte;

    /**
     * @var string
     *
     * @ORM\Column(name="arma", type="string", length=50, nullable=false)
     */
    private $arma;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=100, nullable=false)
     */
    private $lugar;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idAsesino
     *
     * @param integer $idAsesino
     *
     * @return KillMuertes
     */
    public function setIdAsesino($idAsesino)
    {
        $this->idAsesino = $idAsesino;

        return $this;
    }

    /**
     * Get idAsesino
     *
     * @return integer
     */
    public function getIdAsesino()
    {
        return $this->idAsesino;
    }

    /**
     * Set idVictima
     *
     * @param integer $idVictima
     *
     * @return KillMuertes
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
     * Set fechaMuerte
     *
     * @param \DateTime $fechaMuerte
     *
     * @return KillMuertes
     */
    public function setFechaMuerte($fechaMuerte)
    {
        $this->fechaMuerte = $fechaMuerte;

        return $this;
    }

    /**
     * Get fechaMuerte
     *
     * @return \DateTime
     */
    public function getFechaMuerte()
    {
        return $this->fechaMuerte;
    }

    /**
     * Set arma
     *
     * @param string $arma
     *
     * @return KillMuertes
     */
    public function setArma($arma)
    {
        $this->arma = $arma;

        return $this;
    }

    /**
     * Get arma
     *
     * @return string
     */
    public function getArma()
    {
        return $this->arma;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return KillMuertes
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
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
