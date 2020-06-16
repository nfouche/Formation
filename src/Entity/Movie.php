<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MovieRepository")
 * @ORM\Table(name="movies")
 */
class Movie
{
    /**
     * @var int|null
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column
     */
    private $description;

    /**
     * @var \DateTimeImmutable|null
     *
     * @ORM\Column(type="date_immutable")
     */
    private $date;

    /**
     * @var Genre[]|Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Genre", cascade={"persist"})
     */
    private $genres;

    public function __construct()
    {
        $this->genres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): void
    {
        $this->date = $date instanceof \DateTime ? \DateTimeImmutable::createFromMutable($date) : $date;
    }

    /**
     * @return Genre[]|Collection
     */
    public function getGenres(): Collection
    {
        return $this->genres;
    }

    public function addGenre(Genre $genre): void
    {
        if (!$this->genres->contains($genre)) {
            $this->genres->add($genre);
        }
    }

    public function removeGenre(Genre $genre): void
    {
        $this->genres->removeElement($genre);
    }
}
