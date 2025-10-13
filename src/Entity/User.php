<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: 'integer')]
    private ?int $borrowedCount = 0;

    #[ORM\OneToMany(mappedBy: 'borrower', targetEntity: BookBorrow::class, cascade: ['remove'])]
    private Collection $borrowedBooks;

    public function __construct()
    {
        $this->borrowedBooks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getBorrowedCount(): ?int
    {
        return $this->borrowedCount;
    }

    public function setBorrowedCount(int $borrowedCount): static
    {
        $this->borrowedCount = $borrowedCount;
        return $this;
    }

    /**
     * @return Collection<int, BookBorrow>
     */
    public function getBorrowedBooks(): Collection
    {
        return $this->borrowedBooks;
    }

    public function addBorrowedBook(BookBorrow $record): static
    {
        if (!$this->borrowedBooks->contains($record)) {
            $this->borrowedBooks->add($record);
            $record->setBorrower($this);
        }

        return $this;
    }

    public function removeBorrowedBook(BookBorrow $record): static
    {
        if ($this->borrowedBooks->removeElement($record)) {
            if ($record->getBorrower() === $this) {
                $record->setBorrower(null);
            }
        }

        return $this;
    }
}
