<?php

class Chapter
{

    private string $chaptertitle;
    private int $page;

    /**
     * @param string $chaptertitle
     * @param int $page
     */
    public function __construct(string $chaptertitle, int $page)
    {
        $this->chaptertitle = $chaptertitle;
        $this->page = $page;
    }


    /**
     * @return string
     */
    public function getChaptertitle(): string
    {
        return $this->chaptertitle;
    }

    /**
     * @param string $chaptertitle
     */
    public function setChaptertitle(string $chaptertitle): void
    {
        $this->chaptertitle = $chaptertitle;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

}

