<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DxStories
 *
 * @ORM\Table(name="dx_stories", indexes={@ORM\Index(name="id_partida", columns={"id_partida"}), @ORM\Index(name="storyteller_id", columns={"storyteller_id"}), @ORM\Index(name="topic_id", columns={"topic_id"}), @ORM\Index(name="dixit", columns={"dixit"})})
 * @ORM\Entity
 */
class DxStories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="round", type="integer", nullable=false)
     */
    private $round;

    /**
     * @var integer
     *
     * @ORM\Column(name="turn", type="integer", nullable=false)
     */
    private $turn;

    /**
     * @var string
     *
     * @ORM\Column(name="dixit", type="string", length=255, nullable=false)
     */
    private $dixit;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\DxTopics
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DxTopics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="topic_id", referencedColumnName="id")
     * })
     */
    private $topic;

    /**
     * @var \AppBundle\Entity\DxJugadores
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DxJugadores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="storyteller_id", referencedColumnName="id")
     * })
     */
    private $storyteller;

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
     * Set round
     *
     * @param integer $round
     *
     * @return DxStories
     */
    public function setRound($round)
    {
        $this->round = $round;

        return $this;
    }

    /**
     * Get round
     *
     * @return integer
     */
    public function getRound()
    {
        return $this->round;
    }

    /**
     * Set turn
     *
     * @param integer $turn
     *
     * @return DxStories
     */
    public function setTurn($turn)
    {
        $this->turn = $turn;

        return $this;
    }

    /**
     * Get turn
     *
     * @return integer
     */
    public function getTurn()
    {
        return $this->turn;
    }

    /**
     * Set dixit
     *
     * @param string $dixit
     *
     * @return DxStories
     */
    public function setDixit($dixit)
    {
        $this->dixit = $dixit;

        return $this;
    }

    /**
     * Get dixit
     *
     * @return string
     */
    public function getDixit()
    {
        return $this->dixit;
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
     * Set topic
     *
     * @param \AppBundle\Entity\DxTopics $topic
     *
     * @return DxStories
     */
    public function setTopic(\AppBundle\Entity\DxTopics $topic = null)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \AppBundle\Entity\DxTopics
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set storyteller
     *
     * @param \AppBundle\Entity\DxJugadores $storyteller
     *
     * @return DxStories
     */
    public function setStoryteller(\AppBundle\Entity\DxJugadores $storyteller = null)
    {
        $this->storyteller = $storyteller;

        return $this;
    }

    /**
     * Get storyteller
     *
     * @return \AppBundle\Entity\DxJugadores
     */
    public function getStoryteller()
    {
        return $this->storyteller;
    }

    /**
     * Set idPartida
     *
     * @param \AppBundle\Entity\ChcPartidas $idPartida
     *
     * @return DxStories
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
