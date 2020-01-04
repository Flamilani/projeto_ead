<?php

class painelController extends controller {
    
    public function __construct() {     
        parent::__construct();           
    }

    public function index() {
       $dados = array(
       	 	'info' => array(),
          'cursos' => array()
       );

       $alunos = new Alunos();
       $alunos->setAluno($_SESSION['logaluno']);
       $dados['info'] = $alunos;

       $cursos = new Cursos();
       $dados['cursos'] = $cursos->getCursoDoAluno($alunos->getId());
     
       $this->loadTemplateInPainel('painel/home', $dados);
    }  

     public function login() {
       $dados = array();

      $this->loadTemplateInPainel('painel/login', $dados);
     }
}
