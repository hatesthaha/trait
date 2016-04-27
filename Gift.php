<?php

class Gift extends Product
{
    protected $name;

    public function __construct($brand, $name)
    {
        parent::__construct($brand);
        $this->name = $name;
    }

}