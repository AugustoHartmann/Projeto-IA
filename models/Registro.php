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

    }


?>