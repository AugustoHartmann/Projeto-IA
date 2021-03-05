<?php

    class Generos extends Model {
        
        public function getAllgenero() {

            $data = array();

            $sql = "SELECT id_genero, nome FROM genero";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0) {
                $data = $sql->fetchAll();
                return $data;
            } else {
                return '';
            }
        }

        public function getGenero() {
            
        }


    } 
?>