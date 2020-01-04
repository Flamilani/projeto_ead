<?php 
class Controller {

	public function __construct() {

    }

    public function __call($name, $arguments) {
        $this->loadTemplate('error_404');
    }

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/' . $viewName . '.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		include 'views/template.php';
	}

	public function loadTemplateInPainel($viewName, $viewData = array()) {
		include 'views/painel.php';
	}

	public function loadTemplateInAdmin($viewName, $viewData = array()) {
		include 'views/admin.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/' . $viewName . '.php';
	}

	public function helperUrl() {
		$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
		$numSegments = count($segments); 
		return $segments[$numSegments - 1];
	}

 }

 ?>
