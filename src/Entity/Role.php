<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nameOfRole = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameOfRole(): ?string
    {
        return $this->nameOfRole;
    }

    public function setNameOfRole(string $nameOfRole): static
    {
        $this->nameOfRole = $nameOfRole;

        return $this;
    }
}
