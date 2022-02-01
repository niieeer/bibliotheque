<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Book
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
    private string $title;
    /**
     * @ORM\Column(length="100")
     */
    private string $resume;
    /**
     * @ORM\Column(length="100")
     */
    private string $author;
    /**
     * @ORM\Column(length="100")
     */
    private string $editor;
    /**
     * @ORM\Column(type="integer")
     */
    private int $ISBN_number;
    /**
     * @ORM\Column(type="integer")
     */
    private int $No_of_copies;


    public function __construct(string $t, string $r, string $a, string $e, int $No_of_copies)
    {
        $this->title = $t;
        $this->resume = $r;
        $this->author = $a;
        $this->editor = $e;
        $this->ISBN_number = random_int(1, 99999);
        $this->No_of_copies = $No_of_copies;
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

    /**
     * Get the value of title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of resume
     *
     * @return string
     */
    public function getResume(): string
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @param string $resume
     *
     * @return self
     */
    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }


    /**
     * Get the value of ISBN_number
     *
     * @return int
     */
    public function getISBNNumber(): int
    {
        return $this->ISBN_number;
    }

    /**
     * Set the value of ISBN_number
     *
     * @param int $ISBN_number
     *
     * @return self
     */
    public function setISBNNumber(int $ISBN_number): self
    {
        $this->ISBN_number = $ISBN_number;

        return $this;
    }

    /**
     * Get the value of No_of_copies
     *
     * @return int
     */
    public function getNoOfCopies(): int
    {
        return $this->No_of_copies;
    }

    /**
     * Set the value of No_of_copies
     *
     * @param int $No_of_copies
     *
     * @return self
     */
    public function setNoOfCopies(int $No_of_copies): self
    {
        $this->No_of_copies = $No_of_copies;

        return $this;
    }

    /**
     * Get the value of author
     *
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of editor
     *
     * @return string
     */
    public function getEditor(): string
    {
        return $this->editor;
    }

    /**
     * Set the value of editor
     *
     * @param string $editor
     *
     * @return self
     */
    public function setEditor(string $editor): self
    {
        $this->editor = $editor;

        return $this;
    }
}
