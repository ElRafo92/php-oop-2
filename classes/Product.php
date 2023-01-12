<?php

class Product {
    private $name;
    private $price;
    private $img;
    private $category;

    public function __construct( string $name, float $price, string $img, Category $category )
    {
        $this -> name = $name;
        $this -> price = $price;
        $this -> img = $img;
        $this -> category = $category;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImg() {
        return $this->img;
    }
     
    public function getCategory() {
        return $this->category;
    }

}