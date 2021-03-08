<?php

class tipoController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $nome = $_GET['nome'];

        $dados = array();
        
        $livro = new Livros();
        $genero = new Generos();
        $livro_genero = new Livro_genero();


        if(!isset($_SESSION['genero'])) {
            $_SESSION['genero'] = array();
        }


        if($nome != "Todos") {
            if(array_key_exists($nome, $_SESSION['genero'])) {
                $_SESSION['genero'][$nome] += 1;
            } else {
                $_SESSION['genero'][$nome] = 1;
            }
        }


        $dados['livro'] = $livro->getTipoLivro($nome);
        $dados['genero'] = $genero->getAllgenero();
        $dados["livro_genero"] = $livro_genero->getRelacao();


        $this->loadTemplate('tipo', $dados);

    }


}


?>