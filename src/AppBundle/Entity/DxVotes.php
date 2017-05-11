<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DxVotes
 *
 * @ORM\Table(name="dx_votes", indexes={@ORM\Index(name="story_id", columns={"story_id"}), @ORM\Index(name="player_id", columns={"player_id"}), @ORM\Index(name="card_id", columns={"card_id"})})
 * @ORM\Entity
 */
class DxVotes
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
     * @var \AppBundle\Entity\DxJugadores
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DxJugadores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     * })
     */
    private $player;

    /**
     * @var \AppBundle\Entity\DxStories
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DxStories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="story_id", referencedColumnName="id")
     * })
     */
    private $story;



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
     * @return DxVotes
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
     * Set player
     *
     * @param \AppBundle\Entity\DxJugadores $player
     *
     * @return DxVotes
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
     * Set story
     *
     * @param \AppBundle\Entity\DxStories $story
     *
     * @return DxVotes
     */
    public function setStory(\AppBundle\Entity\DxStories $story = null)
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Get story
     *
     * @return \AppBundle\Entity\DxStories
     */
    public function getStory()
    {
        return $this->story;
    }
}
