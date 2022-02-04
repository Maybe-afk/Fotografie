<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TestRepository::class)
 */
class Test
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $question;

    /**
     * @ORM\ManyToMany(targetEntity=Users::class, inversedBy="tests")
     */
    private $userid;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, cascade={"persist", "remove"})
     */
    private $placeid;

   

    public function __construct()
    {
        $this->uderid = new ArrayCollection();
        $this->userid = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    /**
     * @return Collection|Users[]
     */
    public function getUserid(): Collection
    {
        return $this->userid;
    }

    public function addUserid(Users $userid): self
    {
        if (!$this->userid->contains($userid)) {
            $this->userid[] = $userid;
        }

        return $this;
    }

    public function removeUserid(Users $userid): self
    {
        $this->userid->removeElement($userid);

        return $this;
    }

    public function getPlaceid(): ?Product
    {
        return $this->placeid;
    }

    public function setPlaceid(?Product $placeid): self
    {
        $this->placeid = $placeid;

        return $this;
    }

  

  
}
