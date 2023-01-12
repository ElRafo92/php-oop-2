<?php 

require_once __DIR__ . '/Product.php';

class Game extends Product {
    private $material;

    public function setMaterial($_material) {
        $this->material = $_material;
    }

    public function getMaterial() {
        return $this->material;
    }


}