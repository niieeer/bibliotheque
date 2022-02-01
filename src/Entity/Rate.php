<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Rate
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;
    /**
     * @ORM\Column(length="100")
     */
    private string $comment;
    /**
     * @ORM\Column(type="integer")
     */
    private int $ratings;
    /**
     * @ORM\ManyToOne(targetEntity="Book")
     * @ORM\JoinColumn(name="id_book", referencedColumnName="id")
     */
    private book $id_book;

    public function __construct(string $comment, int $ratings, Book $id_books)
    {
        $this->comment =$comment;
        $this->ratings = $ratings;
        $this->id_books = $id_books;
    }
    /**
     * Get the value of ratings
     *
     * @return int
     */
    public function getRatings(): int
    {
        return $this->ratings;
    }

    /**
     * Set the value of ratings
     *
     * @param int $ratings
     *
     * @return self
     */
    public function setRatings(int $ratings): self
    {
        $this->ratings = $ratings;

        return $this;
    }

    /**
     * Get the value of comment
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of id_book
     *
     * @return book
     */
    public function getIdBook(): book
    {
        return $this->id_book;
    }

    /**
     * Set the value of id_book
     *
     * @param book $id_book
     *
     * @return self
     */
    public function setIdBook(book $id_book): self
    {
        $this->id_book = $id_book;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
