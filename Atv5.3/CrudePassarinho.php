<?php

    class CrudePassaro{

        ///conexao
        private $conexao;


        // construtor
        public function __construct($conexao){
            $this->conexao = $conexao;
        }

        ///inserir gato no bd
        public function inserirPassaro($id_animal, $tipo_canto, $especie){
            $stmt = $this->conexao->prepare("INSERT INTO passaro (id_animal, tipo_canto, especie) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $id_animal, $tipo_canto, $especie);
            return $stmt->execute();
        }   

        /// buscar dados do gato
        public function lerPassaro(){
            $stmt = $this->conexao->preapre("SELECT * FROM passaro");
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }   

        ///update
        public function updatePassaro($id_animal, $tipo_canto, $especie){
            $stmt = $this->conexao->prepare("UPDATE passaro SET tipo_canto = ?, especie = ?");
            $stmt->bind_param("ss", $tipo_canto, $especie);
            return $stmt->execute();
        }

            
        }


?>