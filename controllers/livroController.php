<?php

 class livroController extends Controller {
    private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $id = $_GET['id'];




        
        $dados = array();

        $generos = new Generos();
        $livros = new Livros();

        $dados['generos'] = $generos->getGenero($id);
        $dados['livro'] = $livros->getLivro($id);


        if(!isset($_SESSION['genero'])) {
            $_SESSION['genero'] = array();
        }

        foreach($dados["generos"] as $dg) {
            if(array_key_exists($dg['nome'], $_SESSION['genero'])) {
                $_SESSION['genero'][$dg['nome']] += 1;
            } else {
                $_SESSION['genero'][$dg['nome']] = 1;
            }
        }

        $this->loadTemplate("livro", $dados);

    }


 }



?>