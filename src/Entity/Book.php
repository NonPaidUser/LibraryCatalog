<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $author = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $publishedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $category = null;

    #[ORM\Column(type: 'integer')]
    private ?int $availableCount = 0;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $totalCount = null;

    #[ORM\OneToMany(mappedBy: 'book', targetEntity: BookBorrow::class, cascade: ['remove'])]
    private Collection $borrowRecords;

    public function __construct()
    {
        $this->borrowRecords = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): static
    {
        $this->author = $author;
        return $this;
    }

    public function getPublishedAt(): ?\DateTimeImmutable
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(?\DateTimeImmutable $publishedAt): static
    {
        $this->publishedAt = $publishedAt;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): static
    {
        $this->category = $category;
        return $this;
    }

    public function getAvailableCount(): ?int
    {
        return $this->availableCount;
    }

    public function setAvailableCount(int $availableCount): static
    {
        $this->availableCount = $availableCount;
        return $this;
    }

    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    public function setTotalCount(?int $totalCount): static
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    /**
     * @return Collection<int, BookBorrow>
     */
    public function getBorrowRecords(): Collection
    {
        return $this->borrowRecords;
    }

    public function addBorrowRecord(BookBorrow $record): static
    {
        if (!$this->borrowRecords->contains($record)) {
            $this->borrowRecords->add($record);
            $record->setBook($this);
        }

        return $this;
    }

    public function removeBorrowRecord(BookBorrow $record): static
    {
        if ($this->borrowRecords->removeElement($record)) {
            if ($record->getBook() === $this) {
                $record->setBook(null);
            }
        }

        return $this;
    }
}
