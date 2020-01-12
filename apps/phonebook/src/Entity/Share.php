<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShareRepository")
 */
class Share
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $phone_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Phone", inversedBy="share")
     */
    private $phone;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="share")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getPhoneId(): ?int
    {
        return $this->phone_id;
    }

    public function setPhoneId(int $phone_id): self
    {
        $this->phone_id = $phone_id;

        return $this;
    }

    public function getPhone(): ?Phone
    {
        return $this->phone;
    }

    public function setPhone(?Phone $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
