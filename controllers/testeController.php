<?php 
class testeController extends controller {

	public function index() {
		echo "Página de Teste";
	}

	public function page($nome) {
		echo "Outra página, " . $nome;
	}
 }
