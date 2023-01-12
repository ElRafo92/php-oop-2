<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {
    private $expiration;

    public function setExpiration($_date) {
        $this->expiration = $_date;
    }

    public function getExpiration() {
        return $this->expiration;
    }

}