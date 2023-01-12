<?php   

require_once __DIR__ . '/Product.php';

class Bed extends Product {
    private $size;

    public function setSize($_size) {
        $this->size = $_size;
    }

    public function getSize() {
        return $this->size;
    }

}