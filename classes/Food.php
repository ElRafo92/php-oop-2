<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../traits/LotNumber.php';

class Food extends Product {
    use lotNumber;

    private $expiration;

    public function setExpiration($_date) {
        $this->expiration = $_date;
    }

    public function getExpiration() {
        return $this->expiration;
    }

}