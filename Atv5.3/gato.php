<?php

require_once 'Animal.php';

class Gato extends Animal {
    private $corPelagem;

    public function __construct($nome, $idade, $corPelagem) {
        parent::__construct($nome, $idade);
        $this->corPelagem = $corPelagem;
    }

    public function getDescricao() {
        return parent::getDescricao() . " Este gato tem pelagem de cor {$this->corPelagem}.";
    }
}
?>
