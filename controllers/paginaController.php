<?php 

class paginaController extends controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index($url) {
		echo "URL: " . $url;
	}
}

 ?>