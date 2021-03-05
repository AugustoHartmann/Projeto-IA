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
        $dados['livro'] = $livro->getTipoLivro($nome);
        $dados['genero'] = $genero->getAllgenero();



        

        $this->loadTemplate('home', $dados);

    }


}


?>