<?php

    class Login extends model {

        public function verificar($nome, $senha) {
            $sql = "SELECT id, nome_usuario FROM usuario WHERE senha=:senha";
            $sql = $this->db->prepare($sql);

            $sql->bindValue(":senha", $senha);
            $sql->execute();


            if($sql->rowCount() > 0) {
                $_SESSION['usuario'] = $nome;

                $data = $sql->fetchAll();
                return $data;
            
            
            } else {
                return '';
            }
        
        }   

        public function sair(){

            session_destroy();

            header("Location: ".BASE_URL);
        }

    }

?>