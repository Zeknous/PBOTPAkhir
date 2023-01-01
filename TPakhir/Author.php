<?php

class Author implements Taxable{
            private string $name;
            private float $royalti;
            
            public function __construct(string $name) {
                $this->name = $name;
            }
            
            public function getName(): string {
                return $this->name;
            }
            
            public function setName(string $name): void
            {
                $this->name = $name;
            }

            public function getRoyalti(): float
            {
                return $this->royalti;
            }

            public function setRoyalti(float $royalti): void
            {
                $this->royalti = $royalti;
            }
            
            public function calculateTax(): float
            {
                return self::taxRate * $this->getRoyalti();
            }
        }

