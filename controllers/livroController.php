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

        


    }


 }



?>