<?php

abstract class Product implements Taxable
{
    private int $year;
    private float $cost, $price;

    /**
     * @param int $year
     * @param float $cost
     * @param float $price
     */
    public function __construct(int $year, float $cost, float $price)
    {
        $this->year = $year;
        $this->cost = $cost;
        $this->price = $price;
    }


    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    public function setCost(float $cost): void
    {
        $this->cost = $cost;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }


    abstract public function calculatePrice();

}