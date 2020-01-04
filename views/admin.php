<?php 
setlocale(LC_ALL,'pt_BR.UTF8');
mb_internal_encoding('UTF8'); 
mb_regex_encoding('UTF8');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Painel Administrativo</title>
	<?php require_once('header.php'); ?>
</head>
<body>
		
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		

</body>
</html>