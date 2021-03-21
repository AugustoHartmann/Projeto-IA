<?php

    class Livro_genero extends Model {

        public function getRelacao() {

            $sql = "SELECT * FROM livro_genero";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0) {
                $data = $sql->fetchAll();
                return $data;
            } else {
                return '';
            }

        }



    }

    ?>