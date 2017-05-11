<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DxDeck
 *
 * @ORM\Table(name="dx_deck", indexes={@ORM\Index(name="id_partida", columns={"id_partida"}), @ORM\Index(name="card_id", columns={"card_id"})})
 * @ORM\Entity
 */
class DxDeck
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
     *   @ORM\JoinColumn(name="id_partida", referencedColumnName="id")
     * })
     */
    private $idPartida;



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
     * Set card
     *
     * @param \AppBundle\Entity\DxCards $card
     *
     * @return DxDeck
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
     * Set idPartida
     *
     * @param \AppBundle\Entity\ChcPartidas $idPartida
     *
     * @return DxDeck
     */
    public function setIdPartida(\AppBundle\Entity\ChcPartidas $idPartida = null)
    {
        $this->idPartida = $idPartida;

        return $this;
    }

    /**
     * Get idPartida
     *
     * @return \AppBundle\Entity\ChcPartidas
     */
    public function getIdPartida()
    {
        return $this->idPartida;
    }
}
