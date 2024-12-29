<?php

class SportsCar
{
    protected $brand;
    protected $model;
    protected $topSpeed;

    public function __construct($brand, $model, $topSpeed)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->topSpeed = $topSpeed;
    }

    public function getDetails()
    {
        return "Brand: {$this->brand}, Model: {$this->model}, Top Speed: {$this->topSpeed} km/h";
    }

    public function drive()
    {
        return "{$this->brand} {$this->model} is driving at top speed!";
    }
}
