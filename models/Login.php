<?php

    class Login extends model {

        public function verificar($nome, $senha) {
            $sql = "SELECT id, nome_usuario FROM usuario WHERE senha=:senha and nome_usuario=:nome";
            $sql = $this->db->prepare($sql);


            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":senha", $senha);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $_SESSION['usuario'] = $nome;

                $data = $sql->fetchAll();


                
                $_SESSION['id_usuario'] = $data[0]['id'];

                return $data;
            
            
            } else {
                return '';
            }
        
        }   

        public function excluir_dados() {


            $id_usuario =  $_SESSION['id_usuario'];

            $sql = "DELETE FROM usuario_dados where id_usuario=:id";
            $sql = $this->db->prepare($sql);

            $sql->bindValue(":id", $id_usuario);
            $sql->execute();

            return '';

        }


        public function buscar_dados($id_usuario) {

            $sql = "SELECT dados FROM usuario_dados WHERE id_usuario=:id";
            $sql = $this->db->prepare($sql);

            $sql->bindValue(":id", $id_usuario);
            $sql->execute();


            if($sql->rowCount() > 0) {

                $data = $sql->fetchAll();

                //print_r($data);

                return $data;

            } else {
                return '';
            }



        }


        public function salvar(){

            //print_r($_SESSION['genero']);

            $id_usuario = $_SESSION['id_usuario'];

            $data = array();
            $texto = "";
            $t1 = "";

            foreach($_SESSION['genero'] as $key=>$g) {
                $t1 = $key."-".$g;
                $texto = $texto.$t1."|";
            }

            $sql = "INSERT INTO usuario_dados(id_usuario, dados) values (:id, :texto)";
            
            $sql = $this->db->prepare($sql);

            $sql->bindValue(":id", $id_usuario);
            $sql->bindValue(":texto", $texto);
            
            $sql->execute();

            return 0;

        }

        public function sair(){

            //unset($_SESSION['genero']);

            session_destroy();

            header("Location: ".BASE_URL);
        }

    }

?>