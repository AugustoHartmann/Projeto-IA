<?php

class homeController extends Controller {
    
	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();


        if(!isset($_SESSION['genero'])) {
            $_SESSION['genero'] = array();
        }

        if(count($_SESSION['genero'])>0) {
            
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


            

            foreach($rank as $key=>$g) {
                $prioridade[$key] = round(($g/$total)*10);
            }
            
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

        } else {

            print_r("ELSE");

            $generos = new Generos();
            $livros = new Livros();
            $livro_genero = new Livro_genero();


            $dados["genero"] = $generos->getAllgenero();
            $dados["livro"] = $livros->getSortidosLivros();
            $dados["livro_genero"] = $livro_genero->getRelacao();

            

            //print_r($dados["livro_genero"]);
            //exit;

            $this->loadTemplate('home', $dados);            
        }
    }

    public function zerar() {
        session_destroy();
        
        return $this->index();
    }


}