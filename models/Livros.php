<?php

    class Livros extends Model {

        public function getSortidosLivros() {
            $data = array();

            $sql = "SELECT * from livro ORDER BY RAND() LIMIT 0, 9 ";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0) {
                $data = $sql->fetchAll();
                return $data;
            } else {
                return '';
            }

        }

        
        public function getTipoLivro($nome) {
            $data = array();

            if($nome != "Todos") {

                $sql = "SELECT DISTINCT l.id_livro, l.nome, l.foto, g.nome FROM livro l inner JOIN 
                livro_genero lg on lg.id_livro = l.id_livro INNER JOIN genero g ON g.nome = :nome AND g.id_genero = lg.id_genero ORDER BY RAND()";
                //$sql = "SELECT * FROM livro l inner join livro_genero lg on lg.id_livro = l.id_livro AND lg.id_genero = :id INNER JOIN genero g ON lg.id_genero = g.id_genero ORDER BY RAND()";

                $sql = $this->db->prepare($sql);

                $sql->bindValue(":nome", $nome);
                $sql->execute();

                if($sql->rowCount() > 0) {
                    $data = $sql->fetchAll();
                    return $data;
                } else {
                    return '';
                }
            } else {
                return $this->getSortidosLivros();
            }

        }


        public function getLivro($id) {

            $data = array();

            $sql = "SELECT * from livro where id_livro = :id";

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

        public function getLivrosByFiltro($dados = array()) {


            //print_r($dados);

            $data = array();

            foreach($dados as $key=>$l) {

                $sql = "SELECT * FROM livro l, livro_genero lg, genero g WHERE g.nome = '$key'
                and g.id_genero = lg.id_genero and lg.id_livro = l.id_livro LIMIT $l";
               
                $sql = $this->db->query($sql);

                //$sql = $this->db->prepare($sql);
                //$sql->bindValue(":key", $key);
                //$sql->execute();

                if($sql->rowCount() > 0) {
                    $data[$key] = $sql->fetchAll();
                } else {
                    
                }
            }

            return $data;


        }

    }

?>