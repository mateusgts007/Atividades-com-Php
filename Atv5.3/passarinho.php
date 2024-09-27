<?php

require_once 'Animal.php';

class Passarinho extends Animal {
    private $tipoCanto;

    public function __construct($nome, $idade, $tipoCanto) {
        parent::__construct($nome, $idade);
        $this->tipoCanto = $tipoCanto;
    }

    public function getDescricao() {
        return parent::getDescricao() . " Este passarinho tem um canto do tipo {$this->tipoCanto}.";
    }
}
?>
