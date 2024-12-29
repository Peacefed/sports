<?php

require_once 'SportsCar.php';

class LuxuryCar extends SportsCar
{
    private $price;
    private $comfortLevel;

    public function __construct($brand, $model, $topSpeed, $price, $comfortLevel)
    {
        parent::__construct($brand, $model, $topSpeed);
        $this->price = $price;
        $this->comfortLevel = $comfortLevel;
    }

    public function drive()
    {
        return "{$this->brand} {$this->model} is driving in luxury mode with comfort level {$this->comfortLevel}.";
    }

    public function getLuxuryDetails()
    {
        return $this->getDetails() . ", Price: ₦{$this->price}, Comfort Level: {$this->comfortLevel}";
    }
}
