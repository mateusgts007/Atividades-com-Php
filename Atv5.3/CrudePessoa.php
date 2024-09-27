<?php

    class Crudepessoa{

        /// atributo de conexão
        private $conexao;

        /// construtor
        public function __construct($conexao){

            $this->conexao = $conexao;

        }

        // inserir
        public function inserirPessoa($nome, $telefone, $cpf){
            $stmt = $this->conexao->prepare("INSERT INTO pessoa (nome, telefone,cpf) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nome, $telefone, $cpf);
            return $stmt->execute();
        }

        // select do bd
        public function lerPessoa(){
            $stmt = $this->conexao->prepare ("SELECT * FROM pessoa");
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        ///update 
        public function updadePessoa($id_pessoa, $nome, $telefone, $cpf){
            $stmt = $this->conexao->prepare("UPDATE pessoa SET nome = ?, telefone = ?, cpf = ?");
            $stmt->bind_param("sssi", $nome, $telefone, $cpf, $id_pessoa);
            return $stmt->execute();
        }


        ///deletar
        public function deletarPessoa($id_pessoa){
            $stmt = $this->conexao->prepare("DELETE FROM PESSOA WHERE id_pessoa = ?");
            $stmt ->bind_param("i", $id_pessoa);
            return $stmt->execute();
        }
    }

  



?>
