<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

  

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $rang1v1;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $rang2v2;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $rang3v3solo;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $rang3v3team;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbHeures;
    
    // TO DO //
    // Ajoutez les roles, terminer le bundle security !! // 
  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }


    public function getRang1v1(): ?string
    {
        return $this->rang1v1;
    }

    public function setRang1v1(?string $rang1v1): self
    {
        $this->rang1v1 = $rang1v1;

        return $this;
    }

    public function getRang2v2(): ?string
    {
        return $this->rang2v2;
    }

    public function setRang2v2(?string $rang2v2): self
    {
        $this->rang2v2 = $rang2v2;

        return $this;
    }

    public function getRang3v3solo(): ?string
    {
        return $this->rang3v3solo;
    }

    public function setRang3v3solo(?string $rang3v3solo): self
    {
        $this->rang3v3solo = $rang3v3solo;

        return $this;
    }

    public function getRang3v3team(): ?string
    {
        return $this->rang3v3team;
    }

    public function setRang3v3team(?string $rang3v3team): self
    {
        $this->rang3v3team = $rang3v3team;

        return $this;
    }

    public function getNbHeures(): ?int
    {
        return $this->nbHeures;
    }

    public function setNbHeures(?int $nbHeures): self
    {
        $this->nbHeures = $nbHeures;

        return $this;
    }

    public function __toString() {
        if(is_null($this->pseudo)) {
            return 'NULL';
        }
        return $this->pseudo;
    }

    public function eraseCredentials()
    { }

    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function getSalt()
    { }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
    public function getUsername()
    {
        return $this->pseudo;
    }
}
