<?php
require_once 'models/platillos.php';

class Elicat extends Controlador

{
	
	function __construct()
	{

		//Invocar al metodo MostrarVista
		//$this->mostrarVista("main/index");
	}


	function mostrarVista()
	{
		session_start();
		if ($_SESSION['id_rol'] != 1) {
			header("Location:".URL."login");
      		die();
		} else {
					$nombre = "dashboard/categoria";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$platillos = new Platillos();
    $platillos->eliminarItem($_GET['id'],"categoria");
		$fileName = "views/" . $nombre . ".php";
		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");
		}
	}

	
}

