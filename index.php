<?php  
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once "config/config.php";
require_once "config/db.php";
require_once "controllers/UserController.php";
require_once "core/routes.php";

if(isset($_GET['c'])){
	$controlador = cargarControlador($_GET['c']);
	if(isset($_GET['a'])){
		cargarAccion($controlador, $_GET['a']);
	}else{
		cargarAccion($controlador,MAIN_ACTION);
	}
}else{
	$controlador = cargarControlador(MAIN_CONTROLLER);
	print_r($controlador);
	$accion = MAIN_ACTION;			//Action principal como variable
	$controlador->$accion();		//Accion principal como funcion
}

// $usuario = new UserController();
// $usuario->index();
// https://hobbiespaleq.000webhostapp.com/ 
// http://hobbiespaeq.infinityfreeapp.com/ 9TnQY8581UZ3Be
// https://www.juntadeandalucia.es/servicios/madeja/contenido/recurso/257
// https://pabletoreto.blogspot.com/2015/04/php-pdo-singleton-crud.html
// https://pabletoreto.blogspot.com/2015/04/ejemplo.html*/

?>