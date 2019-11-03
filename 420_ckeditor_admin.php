<?php


	
	session_start();
	//inicializar variables
	$formulario='login';
	//comprobar si se ha pulsado logoff
	if (isset($_POST['logoff'])) {
		unset($_SESSION['ckeditor']);
	}
	//comrobar si existe la variable de sesion
	if (isset($_SESSION['ckeditor'])) {
		$formulario='edicion';
	}
	//validar si se ha pulsado login  (clave encriptada  con md5)
	if (isset($_POST['login'])) {
		//recuperar password del formulario
		$p1 = md5($_POST['password']);
		//recuperar password del fichero (previamente se ha encriptado con md5)
		$p2 = file_get_contents('420_ckeditor_pass.txt');
		if ($p1==$p2) {
			$formulario='edicion';
			//guardar login en la sesion
			$_SESSION['ckeditor']='loginOK';
		}
	}
	//comprobar si se ha pulsado el boton de modificar del formulario
	//si se ha pulsado recuperar el contenido del textarea y grabar el fichero externo
	if (isset($_POST['modificanoticias'])) {
		$texto=$_POST['noticiasck'];
		file_put_contents('420_noticias.html', $texto);	
		echo "actualizado con exito";	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
	<script src="http://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
	<style type="text/css">
		form {width: 400px; margin:auto;}
		div.wraper {width: 400px; height: 300px; margin: auto;}
	</style>
</head>
<body>
	<div class='wraper'>
		<?php 
			if($formulario=='login') {
				include '420_ckeditor_login.html';
			} else {
				include '420_ckeditor_form.php';
			}
		 ?>
		
	</div>
</body>
</html>