<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../traits/LotNumber.php';

class Game extends Product {
    use lotNumber;

    private $material;

    public function setMaterial($_material) {
        if (!is_string($_material)) {
            throw new Exception('Questa non è una parola');
        }

        return $this->material = $_material;
    }

    try {
        setMaterial();
    } catch (Exception $e) {
        echo 'eccezione:'.$e->getMessage();
    }

    public function getMaterial() {
        return $this->material;
    }


}