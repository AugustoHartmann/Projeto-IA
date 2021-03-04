<?php

class homeController extends Controller {
    
	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        $generos = new Generos();
        $livros = new Livros();

        $dados["genero"] = $generos->getAllgenero();
        $dados["livro"] = $livros->getSortidosLivros();


        $this->loadTemplate('home', $dados);
    }

}