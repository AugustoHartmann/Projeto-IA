<?php

class homeController extends Controller {
    
	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        $livros = new Livros();
        $dados["livros"] = $livros->getAllgenero();

        $this->loadTemplate('home', $dados);
    }

}