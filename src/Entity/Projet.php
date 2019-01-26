<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjetRepository")
 */
class Projet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $budjet;

    
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titreProjet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="projets",cascade={"persist"})
     */
    private $categorie;
     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Don", mappedBy="projet",cascade={"remove"}, orphanRemoval=true)
     *
     */
    private $dons;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="projets",cascade = {"persist"})
     */
    private $user;

    /**
     * @ORM\Column(type="blob")
     */
    private $photo;

    private $affichePhoto;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $video;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $date;

   

   
    public function __construct()
    {
        $this->dons = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


  

    public function getTitreProjet(): ?string
    {
        return $this->titreProjet;
    }

    public function setTitreProjet(string $titreProjet): self
    {
        $this->titreProjet = $titreProjet;

        return $this;
    }

    

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getVideo()
    {
        return $this->video;
    }

    public function setVideo($video): self
    {
        $this->video = $video;

        return $this;
    }

    /**
     * @return Collection|Don[]
     */
    public function getDons(): Collection
    {
        return $this->dons;
    }

    public function addDon(Don $don): self
    {
        if (!$this->dons->contains($don)) {
            $this->dons[] = $don;
            $don->setProjet($this);
        }

        return $this;
    }

    public function removeDon(Don $don): self
    {
        if ($this->dons->contains($don)) {
            $this->dons->removeElement($don);
            // set the owning side to null (unless already changed)
            if ($don->getProjet() === $this) {
                $don->setProjet(null);
            }
        }

        return $this;
    }
   

    /**
     * Get the value of budjet
     */ 
    public function getBudjet()
    {
        return $this->budjet;
    }

    /**
     * Set the value of budjet
     *
     * @return  self
     */ 
    public function setBudjet($budjet)
    {
        $this->budjet = $budjet;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

   

    /**
     * Get the value of affichePhoto
     */ 
    public function getAffichePhoto()
    {
        return $this->affichePhoto;
    }

    /**
     * Set the value of affichePhoto
     *
     * @return  self
     */ 
    public function setAffichePhoto($affichePhoto)
    {
        $this->affichePhoto = $affichePhoto;

        return $this;
    }
}
