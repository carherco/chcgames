<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DxHandCards
 *
 * @ORM\Table(name="dx_hand_cards", indexes={@ORM\Index(name="card_id", columns={"card_id"}), @ORM\Index(name="player_id", columns={"player_id"}), @ORM\Index(name="partida_id", columns={"partida_id"})})
 * @ORM\Entity
 */
class DxHandCards
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
     * @var \AppBundle\Entity\DxJugadores
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DxJugadores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     * })
     */
    private $player;

    /**
     * @var \AppBundle\Entity\DxCards
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DxCards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="card_id", referencedColumnName="id")
     * })
     */
    private $card;

    /**
     * @var \AppBundle\Entity\ChcPartidas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ChcPartidas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partida_id", referencedColumnName="id")
     * })
     */
    private $partida;



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
     * Set player
     *
     * @param \AppBundle\Entity\DxJugadores $player
     *
     * @return DxHandCards
     */
    public function setPlayer(\AppBundle\Entity\DxJugadores $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \AppBundle\Entity\DxJugadores
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set card
     *
     * @param \AppBundle\Entity\DxCards $card
     *
     * @return DxHandCards
     */
    public function setCard(\AppBundle\Entity\DxCards $card = null)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card
     *
     * @return \AppBundle\Entity\DxCards
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set partida
     *
     * @param \AppBundle\Entity\ChcPartidas $partida
     *
     * @return DxHandCards
     */
    public function setPartida(\AppBundle\Entity\ChcPartidas $partida = null)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return \AppBundle\Entity\ChcPartidas
     */
    public function getPartida()
    {
        return $this->partida;
    }
}
