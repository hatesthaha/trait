<?php

class Computer extends Product
{
    use Sellable;

    protected $cores = 8;
    //...

    public function getNumberOfCores()
    {
        return $this->cores;
    }
}