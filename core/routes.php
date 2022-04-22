<?php  

function cargarControlador($controlador){
	$nombreControlador = ucwords($controlador)."Controller";		//Clase 
	echo $nombreControlador.'<br>';
	$archivoControlador = 'controllers/'.ucwords($controlador).'Controller.php';	//Archivo
	echo $archivoControlador.'<br>';

	if(!is_file($archivoControlador)){
		$archivoControlador = 'controllers/'.MAIN_CONTROLLER.'.Controller.php';
	}
	require_once $archivoControlador; 	//Archivo
	$control = new $nombreControlador();	//Clase
	return $control;
}

function cargarAccion($controlador, $accion, $id=null){
	if(isset($accion) && method_exists($controlador, $accion)){	// method_exists(clase, metodo)
		return $controlador->$accion();
	}else{
		return $controlador->ACCION_PRINCIPAL();
	}
}

?>