<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DxEstado
 *
 * @ORM\Table(name="dx_estado", indexes={@ORM\Index(name="id_partida", columns={"id_partida"}), @ORM\Index(name="topic_id", columns={"topic_id"}), @ORM\Index(name="storyteller_id", columns={"storyteller_id"}), @ORM\Index(name="story_id", columns={"story_id"})})
 * @ORM\Entity
 */
class DxEstado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_partida", type="integer", nullable=false)
     */
    private $idPartida;

    /**
     * @var integer
     *
     * @ORM\Column(name="ronda", type="integer", nullable=false)
     */
    private $ronda;

    /**
     * @var integer
     *
     * @ORM\Column(name="turno", type="integer", nullable=false)
     */
    private $turno;

    /**
     * @var string
     *
     * @ORM\Column(name="fase", type="string", length=12, nullable=false)
     */
    private $fase;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \AppBundle\Entity\DxJugadores
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DxJugadores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="storyteller_id", referencedColumnName="id")
     * })
     */
    private $storyteller;

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
     * Set idPartida
     *
     * @param integer $idPartida
     *
     * @return DxEstado
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
     * Set ronda
     *
     * @param integer $ronda
     *
     * @return DxEstado
     */
    public function setRonda($ronda)
    {
        $this->ronda = $ronda;

        return $this;
    }

    /**
     * Get ronda
     *
     * @return integer
     */
    public function getRonda()
    {
        return $this->ronda;
    }

    /**
     * Set turno
     *
     * @param integer $turno
     *
     * @return DxEstado
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get turno
     *
     * @return integer
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Set fase
     *
     * @param string $fase
     *
     * @return DxEstado
     */
    public function setFase($fase)
    {
        $this->fase = $fase;

        return $this;
    }

    /**
     * Get fase
     *
     * @return string
     */
    public function getFase()
    {
        return $this->fase;
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
     * Set story
     *
     * @param \AppBundle\Entity\DxStories $story
     *
     * @return DxEstado
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

    /**
     * Set storyteller
     *
     * @param \AppBundle\Entity\DxJugadores $storyteller
     *
     * @return DxEstado
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
     * Set topic
     *
     * @param \AppBundle\Entity\DxTopics $topic
     *
     * @return DxEstado
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
}
