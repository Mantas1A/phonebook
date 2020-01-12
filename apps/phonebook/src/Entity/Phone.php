<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PhoneRepository")
 */
class Phone
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="bigint", unique=true)
     */
    private $phone_number;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Share", mappedBy="phone")
     */
    private $share;

    public function __construct()
    {
        $this->share = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Share[]
     */
    public function getShare(): Collection
    {
        return $this->share;
    }

    public function addShare(Share $share): self
    {
        if (!$this->share->contains($share)) {
            $this->share[] = $share;
            $share->setPhone($this);
        }

        return $this;
    }

    public function removeShare(Share $share): self
    {
        if ($this->share->contains($share)) {
            $this->share->removeElement($share);
            // set the owning side to null (unless already changed)
            if ($share->getPhone() === $this) {
                $share->setPhone(null);
            }
        }

        return $this;
    }
}
