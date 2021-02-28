<?php

    class Livros extends Model {
        
        public function getAllgenero() {

            $data = array();

            $sql = "SELECT nome FROM genero";
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