<?php

class homeController extends Controller {
    
	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        /*
        if(!isset($_COOKIE['genero'])) {
            $_COOKIE['genero'] = array();
        }
*/




        if(!isset($_SESSION['genero'])) {
            $_SESSION['genero'] = array();
        }

        if(count($_SESSION['genero'])>0) {

            //print_r("IF");
            
            $generos = new Generos();
            $livros = new Livros();

            $dados["genero"] = $generos->getAllgenero();
            $dados["livro"] = $livros->getSortidosLivros();

            $this->loadTemplate('tipo', $dados);

        } else {

            //print_r("ELSE");

            $generos = new Generos();
            $livros = new Livros();

            $dados["genero"] = $generos->getAllgenero();
            $dados["livro"] = $livros->getSortidosLivros();

            $this->loadTemplate('home', $dados);            
        }
    }

    public function zerar() {
        session_destroy();
        
        return $this->index();
    }


}