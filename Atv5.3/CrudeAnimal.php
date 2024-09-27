<?php

    class CrudeAnimal{

        /// atributo de conexão
        private $conexao;

        /// construtor
        public function __construct($conexao){

            $this->conexao = $conexao;

        }

        // inserir
        public function inserirAnimal($nome_animal, $sexo, $idade){
            $stmt = $this->conexao->prepare("INSERT INTO animal (nome_animal, sexo , idade) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nome_animal, $sexo, $idade);
            return $stmt->execute();
        }

        // select do bd
        public function leraAnimal(){
            $stmt = $this->conexao->prepare ("SELECT * FROM animal");
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        ///update 
        public function updadeAnimal($nome_animal, $sexo, $idade, $id_animal){
            $stmt = $this->conexao->prepare("UPDATE animal SET nome_animal = ?, sexo = ?, idade = ?, id_animal = ?");
            $stmt->bind_param("sssi", $nome_animal, $sexo, $idade, $id_animal);
            return $stmt->execute();
        }


        ///deletar
        public function deletarAnimal($id_animal){
            $stmt = $this->conexao->prepare("DELETE FROM animal WHERE id_animal = ?");
            $stmt ->bind_param("i", $id_animal);
            return $stmt->execute();
        }
        
    }


    
    

?>
