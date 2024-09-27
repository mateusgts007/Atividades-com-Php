<?php

    class CrudeGato{

        ///conexao
        private $conexao;


        // construtor
        public function __construct($conexao){
            $this->conexao = $conexao;
        }

        ///inserir gato no bd
        public function inserirGato($id_animal, $raca, $pelagem){
            $stmt = $this->conexao->prepare("INSERT INTO gato (id_animal, raca, pelagem) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $id_animal, $raca, $pelagem);
            return $stmt->execute();
        }   

        /// buscar dados do gato
        public function lerGato(){
            $stmt = $this->conexao->preapre("SELECT * FROM gato");
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }   

        ///update
        public function updateGato($id_animal, $raca, $pelagem){
            $stmt = $this->conexao->prepare("UPDATE gato SET pelagem = ?, raca = ?");
            $stmt->bind_param("ss", $pelagem, $raca);
            return $stmt->execute();
        }




            
        }


    



?>