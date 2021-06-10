<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Security\Core\User\UserInterface;



/**
 * @ApiResource
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */

#[ApiResource]
class User implements  UserInterface 
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
    private $First_Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Last_Name;

    /**
     * @ORM\Column(type="integer")
     */
    private $Phone_Number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Password;

    

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $Job;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $Country;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $Experience;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $company;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    const ROLE_BENEVOLE = 'benevole';
    const ROLE_ADMIN = 'admin';
    const ROLE_BENEFICEUR = 'beneficeur';
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->First_Name;
    }

    public function setFirstName(string $First_Name): self
    {
        $this->First_Name = $First_Name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->Last_Name;
    }

    public function setLastName(string $Last_Name): self
    {
        $this->Last_Name = $Last_Name;

        return $this;
    }

    public function getPhoneNumber(): ?int
    {
        return $this->Phone_Number;
    }

    public function setPhoneNumber(int $Phone_Number): self
    {
        $this->Phone_Number = $Phone_Number;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    
    public function eraseCredentials(): ?string{
        return null;
    }
    public function getRoles(){
        return array($this->getRole());
    }
    public function getSalt():?string
    {
        return null;
        }
    public function getUsername(){
        return $this->Email;
    }

    

    
       

    public function getJob(): ?string
    {
        return $this->Job;
    }

    public function setJob(string $Job): self
    {
        $this->Job = $Job;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(string $Country): self
    {
        $this->Country = $Country;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->Experience;
    }

    public function setExperience(string $Experience): self
    {
        $this->Experience = $Experience;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

   

    


}
