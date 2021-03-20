<?php

    class Registro extends model {

        public function inserirRegistro($nome, $senha) {

            $sql = "Insert into usuario (nome_usuario, senha) values(:nome, :senha)";

            $sql = $this->db->prepare($sql);

            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":senha", $senha);
            $sql->execute();

            return 0;
        }


        public function carga_inicial() {


            $sql ="SELECT id FROM usuario ORDER BY id DESC LIMIT 1";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0) {
                $id_usuario = $sql->fetchAll();
                
            } else {
                
            }


            $dados = '|';

            //print_r($id_usuario);

            $id_usuario = $id_usuario[0];
            $id_usuario = $id_usuario['id'];



            $sql = "Insert into usuario_dados (id_usuario, dados) values(:id, :dados)";

            $sql = $this->db->prepare($sql);

            $sql->bindValue(":id", $id_usuario);
            $sql->bindValue(":dados", $dados);
            $sql->execute();

        }


    }


?>