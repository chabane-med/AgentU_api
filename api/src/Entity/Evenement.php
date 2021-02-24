<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 *
 * @ApiResource
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string A nice person
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $title = '';

    /**
     * The description of this book.
    *
    * @ORM\Column(type="text")
    */
    public $description = '';
    /**
     * The author of this book.
     *
     * @ORM\Column
     */
    public $imageURL ='';

    public function getId(): int
    {
        return $this->id;
    }
}
