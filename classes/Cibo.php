<?php

class Cibo extends Product {
    public $scadenza;

    public function __construct($_nome, $_price, $_animal, $_scadenza)
    {
        parent::__construct($_nome, $_price, $_animal);
        $this->scadenza = $_scadenza;
    }
}