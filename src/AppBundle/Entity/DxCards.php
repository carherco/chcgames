<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DxCards
 *
 * @ORM\Table(name="dx_cards", uniqueConstraints={@ORM\UniqueConstraint(name="file", columns={"file"})}, indexes={@ORM\Index(name="illustrator", columns={"illustrator"})})
 * @ORM\Entity
 */
class DxCards
{
    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=false)
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="illustrator", type="string", length=255, nullable=false)
     */
    private $illustrator;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set file
     *
     * @param string $file
     *
     * @return DxCards
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set illustrator
     *
     * @param string $illustrator
     *
     * @return DxCards
     */
    public function setIllustrator($illustrator)
    {
        $this->illustrator = $illustrator;

        return $this;
    }

    /**
     * Get illustrator
     *
     * @return string
     */
    public function getIllustrator()
    {
        return $this->illustrator;
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
