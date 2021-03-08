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

        
        public function getGenero($id) {
            $data = array();

            $sql = "SELECT g.nome FROM genero g, livro l, livro_genero lg 
            where l.id_livro = :id AND l.id_livro = lg.id_livro AND lg.id_genero = g.id_genero";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id", $id);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $data = $sql->fetchAll();
                return $data;
            } else {
                return '';
            }

        }
    } 
?>