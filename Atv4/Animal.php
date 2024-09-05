<?php

     class gato{ /// classe gato

        private $nome; ///// atributos da classe
        private $idade;
        private $raca;
        private $cor;
        private $tamanho;

        public function __construct($nome,$idade,$raca,$cor,$tamanho){ //// construtor
            $this->nome = $nome;
            $this->idade = $idade;
            $this->raca = $raca;
            $this->cor = $cor;
            $this->tamanho = $tamanho;

        }

        public function getNome(){ /// metodos get
            return $this -> nome;
        }
        public function getIdade(){
            return $this -> idade;
        }
        public function getRaca(){
            return $this -> raca;
        }
        public function getCor(){
            return $this -> cor;
        }
        public function getTamanho(){
            return $this -> tamanho;
        }

        public function setNome($nome){ ///// metodos set
            $this -> nome = $nome;
        }
        public function setIdade($idade){
            $this -> idade = $idade;
        }   
        public function setRaca($raca){
            $this -> raca = $raca;
        }
        public function setCor($cor){
            $this -> cor = $cor;
        }
        public function setTamanho($tamanho){
            $this -> tamanho = $tamanho;
        }


        public function miar(){ ///// ações da classe gato

            echo " <p> O gato está miando</p> ";

        }

        public function dormir(){
            echo " <p> O gato está dormindo </p> ";
        }

        public function comer(){
            echo " <p> O gato está comendo</p> ";
        }

        public function ronronar(){
            echo " <p> O gato está ronronando</p> ";
        }

        public function andar(){
            echo " <p> O gato está andando</p> ";
        }

        public function exibirDados(){
            echo "Nome: " . htmlspecialchars($this->nome) . "<br>";
            echo "Idade: " . htmlspecialchars($this->idade) . "<br>";
            echo "Raca: " . htmlspecialchars($this->raca) . "<br>";
            echo "Cor: " . htmlspecialchars($this->cor) . "<br>";
            echo "Tamanho: " . htmlspecialchars($this->tamanho) . "<br>";
        }




     } ///// final da classe 



?>  