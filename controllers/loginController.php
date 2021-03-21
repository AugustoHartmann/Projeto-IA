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
            $dados_explode = array();

            $dados_apoio = array();
            
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            $login = new Login();
            $dados = $login->verificar($nome, $senha);

            $id_usuario = $dados[0]['id'];


            
            //print_r($id_usuario);

            $dados_usuario = $login->buscar_dados($id_usuario);

            //print_r($dados_usuario);

            foreach($dados_usuario as $du) {
                array_push($dados_explode, explode("|" , $du['dados']));
            }

            //print_r($dados_explode);

            foreach($dados_explode[0] as $de) {
                array_push($dados_apoio ,explode("-",$de));
            }

            //$dados_apoio = $dados_apoio[0];

            //print_r($dados_apoio);
            
            if(!empty($dados_apoio) ) {
                foreach($dados_apoio as $da) {
                    
                    /*
                    print_r($da[0]);
                    echo "<br>";
                    print_r($da[1]);
                    echo "<br>";
                */
                    $_SESSION['genero'][$da[0]] = $da[1];
                

                }
            }
            //print_r($_SESSION['genero']);
            
            //exit;
            header("Location: ".BASE_URL."home");

        }


        public function sair() {

            session_destroy();

            $login = new Login();
            $login->excluir_dados();
            $login->salvar();

            header("Location: ".BASE_URL);
        }


    }



?>