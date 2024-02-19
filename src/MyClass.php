<?php 

class MyClass {

    public string $name;
    public int $price;
    public int $quantity;

    public function __construct(string $name, int $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;   
    }

    public function __clone() {
        $this->name = clone $this->name;
        $this->price = clone $this->price;
        $this->quantity = clone $this->quantity;
    }

    public function getName() {
        return $this->name;
    }
    
}