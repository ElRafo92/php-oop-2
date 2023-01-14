<?php   

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../traits/LotNumber.php';

class Bed extends Product {
    use lotNumber;

    private $size;

    public function setSize($_size) {
        $this->size = $_size;
    }

    public function getSize() {
        return $this->size;
    }

}