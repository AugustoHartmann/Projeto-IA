<?php

class registrarController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index () {
        $dados = array();


        $this->loadTemplate('registrar', $dados);

    }


    public function criar() {
        $dados = array();

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $registrar = new Registro();
        $registrar->inserirRegistro($nome, $senha);

        $this->loadTemplate('login',$dados);
    }


}





?>