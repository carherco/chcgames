<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DxDiscards
 *
 * @ORM\Table(name="dx_discards", indexes={@ORM\Index(name="id_partida", columns={"id_partida"}), @ORM\Index(name="card_id", columns={"card_id"})})
 * @ORM\Entity
 */
class DxDiscards
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
     * @ORM\Column(name="card_id", type="integer", nullable=false)
     */
    private $cardId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idPartida
     *
     * @param integer $idPartida
     *
     * @return DxDiscards
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
     * Set cardId
     *
     * @param integer $cardId
     *
     * @return DxDiscards
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * Get cardId
     *
     * @return integer
     */
    public function getCardId()
    {
        return $this->cardId;
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
