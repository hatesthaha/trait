<?php

class Product
{
    protected $brand;
    
    public function __construct($brand)
    {
        $this->brand = $brand;
    }
    
    public function getBrand()
    {
        return $this->brand;    
    }
}
trait Sellable
{
    protected $price = 0;
    
    public function getPrice()
    {
        return $this->price;
    }
    
    public function setPrice($price)
    {
        return $this->price = $price;
    }
}
class Tv extends Product
{
    use Sellable;

    public function play()
    {
        $this->setPrice(500);
        echo $this->price;
        
        echo "一台 ".$this->brand." 电视在播放中...";
    }
}
$tv = new Tv("sony");
$tv->play();