<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;




/**
 *@ORM\Entity
 */
class AddUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     *@ORM\Column(type="string", length=180)
     */
    private $name;
    /**
     *@ORM\Column(type="integer")
     */
    private $quantity;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }


    public function getQuantity():int
    {
        return $this->quantity;
    }


    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }


}
