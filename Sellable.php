<?php

/**
 * 
 */
trait Sellable
{
    protected $price = 0;
    
    public function getPrice()
    {
        return $this->price;
    }
    
    public function setPrice(int $price)
    {
        return $this->price = $price;
    }
}

