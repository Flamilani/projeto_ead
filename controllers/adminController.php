<?php

class adminController extends controller {
    
    public function __construct() {     
        parent::__construct();   

    }

    public function index() {
       $dados = array();

       if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes(($_POST['email']));
            $senha = md5($_POST['senha']);

            $alunos = new Alunos();
            if($alunos->fazerLogin($email, $senha)) {
                header("Location:" . BASE . 'admin/login');
            }
       }
     
      $this->loadTemplateInAdmin('admin/home', $dados);
    }  

    public function logout() {
        unset($_SESSION['logaluno']);
        header("Location:" . BASE . 'admin/login');
    }
}
