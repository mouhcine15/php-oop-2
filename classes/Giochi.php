<?php

class Giochi extends Product {
    public $materiale;

    public function __construct($_nome, $_price, $_animal, $_materiale)
    {
        parent::__construct($_nome, $_price, $_animal);
        $this->materiale = $_materiale;
    }
}