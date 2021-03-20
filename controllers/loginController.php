<?php

    class loginController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function index() {

            $dados = array();

            


            $this->loadTemplate('login', $dados);


        }


        public function logar() {

            $dados = array();

            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            $login = new Login();
            $login->verificar($nome, $senha);

            header("Location: ".BASE_URL."home");

        }

        public function sair() {

            session_destroy();

            header("Location: ".BASE_URL);
        }
    }



?>