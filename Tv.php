<?php

class Tv extends Product
{
    use Sellable;
    //...

    public function play()
    {
        setPrice(5000);
        echo $this->price;
        echo "一台 {$this->brand} 电视在播放中...";
    }
}