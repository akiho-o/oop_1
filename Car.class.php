<?php

class Car
{
    private $car_name;
    private $number;
    private $color;
    public function __construct($car_name, $number, $color)
    {
        $this->car_name = $car_name;
        $this->number = $number;
        $this->color = $color;
    }
    
    public function getName()
    {
        return $this->car_name;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setName($car_name)
    {
        $this->car_name = $car_name;
    }
        public function setNumber($number)
    {
        $this->number = $number;
    }
        public function setColor($color)
    {
        $this->color = $color;
    }

    public function information()
    {
        return "車の車種:" . $this->car_name . "\n" .
                "車体番号:" . $this->number . "\n" . 
                "カラー:" . $this->color . "\n" ;
    }
}