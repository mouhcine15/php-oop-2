<?php 

class Product {
    public $nome;
    public $price;
    public $animal;

    public function __construct($_nome, $_price, $_animal)
    {
        $this->nome = $_nome;
        $this->price = $_price;
        $this->animal = $_animal;
    }
}
