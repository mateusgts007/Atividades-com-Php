<?php
class Animal {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getDescricao() {
        return "{$this->nome} tem {$this->idade} anos.";
    }
}

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
