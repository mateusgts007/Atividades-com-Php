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
?>
