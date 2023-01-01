<?php

class Book extends Product
{
    private string $title;
    private int $numAuthor, $numChapter, $maxAuthor, $maxChapter;
    private array $author, $chapter;

    /**
     * @param string $title
     * @param int $maxAuthor
     * @param int $maxChapter
     */
    public function __construct(string $title, int $year, float $cost, int $maxAuthor, int $maxChapter)
    {
        $this->setYear($year);
        $this->setCost($cost);
        $this->title = $title;
        $this->maxAuthor = $maxAuthor;
        $this->maxChapter = $maxChapter;

        $this->numAuthor = 0;
        $this->numChapter = 0;
    }


    public function Addauthor(Author $theAuthor)
    {
        $this->author[$this->numAuthor] = $theAuthor;
        $this->numAuthor++;
    }

    public function Createchapter(string $title, int $page)
    {
        $this->chapter[$this->numChapter] = new Chapter($title, $page);
        $this->numChapter++;
    }

    public function calculatePrice()
    {
        return $this->getCost() + $this->getCost() * 40/100;
    }

    public function toString(): string {
        return "Judul: " . $this->getTitle() .
            "Tahun: " . $this->getYear() .
            "Biaya: " . $this->getCost() .
            "Harga: " . $this->getPrice() .
            "Pajak: " . $this->calculateTax();
    }

    public function setAuthorRoyalty(Author $a, int $royalty)
    {
        $a->setRoyalti($royalty);
    }

    /**
     * @return array
     */
    public function getChapter(int $i): Chapter
    {
        return $this->chapter[$i];
    }

    /**
     * @return array
     */
    public function getAuthor(int $i): Author
    {
        return $this->author[$i];
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getNumAuthor(): int
    {
        return $this->numAuthor;
    }

    /**
     * @return int
     */
    public function getNumChapter(): int
    {
        return $this->numChapter;
    }

    /**
     * @return int
     */
    public function getMaxAuthor(): int
    {
        return $this->maxAuthor;
    }

    /**
     * @return int
     */
    public function getMaxChapter(): int
    {
        return $this->maxChapter;
    }

    public function calculateTax(): float
    {
        return $this->getCost() * 40/100;
    }
}