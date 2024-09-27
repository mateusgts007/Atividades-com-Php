<?php

     class pessoa{

        private $nome;
        private $telefone;
        private $cpf;


        ///// métodos get da classe pessoa

        public function getNome($nome){
            return $this->$nome;
        }

            public function getTelefone($telefone){
                return $this->$telefone;
            }

                public function getCpf($cpf){
                    return $this->$cpf;
                }

        //// métodos set da classe pessoa

        public function setNome($nome){
            $this-> nome = $nome;
        }

            public function setTelefone($telefone){
                $this-> telefone = $telefone;
            }

                public function setCpf($cpf){
                    $this-> cpf = $cpf;
                }


        /// construtor da classe pessoa
        public function __construct($nome,$telefone,$cpf){
            $this-> $nome = $nome;
            $this-> telefone = $telefone;
            $this-> cpf = $cpf;
        }


        }



?>