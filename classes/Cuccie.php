<?php

class Cuccie extends Product {
    public $grandezza;

    public function __construct($_nome, $_price, $_animal, $_grandezza)
    {
        parent::__construct($_nome, $_price, $_animal);
        $this->grandezza = $_grandezza;
    }
}