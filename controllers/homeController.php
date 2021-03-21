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
            $_SESSION['genero'] = array('q'=>0);
        }ç

        
        //print_r($_SESSION['genero']);

        if(!empty($_SESSION['genero']) and sizeof($_SESSION['genero'])>1) {

            $rank = array();

            foreach($_SESSION['genero'] as $key=>$g) {
                $rank[$key] = $g;
            }

            arsort($rank);

            $total = 0;

            foreach($rank as $key=>$g) {
                $total += $g;
            }

            $prioridade = array();

            //if($g > 0){    
                foreach($rank as $key=>$g) {
                    $prioridade[$key] = round(($g/$total)*10);
                }
            //}
            $generos = new Generos();
            $livros = new Livros();
            $livro_genero = new Livro_genero();

            $dados["genero"] = $generos->getAllgenero();
            $dados['livro'] = $livros->getLivrosByFiltro($prioridade);
            

            //$contar = count($dados["livro"]);
            //print_r($dados['livro']);
            //exit;
            

            $dados["livro_genero"] = $livro_genero->getRelacao();

            
            $this->loadTemplate('filtro', $dados);
            //$this->loadTemplate('tipo', $dados);

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
        
        
        unset($_SESSION['genero']);
        return $this->index();
    }


}