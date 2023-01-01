<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Lenovo
 */
interface Taxable {
    //put your code here
    const taxRate = 10;
    public function calculateTax(): float;
}
