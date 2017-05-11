<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DxPoints
 *
 * @ORM\Table(name="dx_points", indexes={@ORM\Index(name="story_id", columns={"story_id"}), @ORM\Index(name="player_id", columns={"player_id"})})
 * @ORM\Entity
 */
class DxPoints
{
    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", nullable=false)
     */
    private $points;

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
     * @var \AppBundle\Entity\DxStories
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DxStories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="story_id", referencedColumnName="id")
     * })
     */
    private $story;



    /**
     * Set points
     *
     * @param integer $points
     *
     * @return DxPoints
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
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
     * Set player
     *
     * @param \AppBundle\Entity\DxJugadores $player
     *
     * @return DxPoints
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
     * @return DxPoints
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
