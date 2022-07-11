<?php
//Requiere que se cargue el archivo conexion.php de la carpeta Model
require_once 'Model/conexion.php';
//el controlador se llama cliente
$controller = 'cliente';

// Con esta sección hacemos el Controlador del Frontend
if(!isset($_REQUEST['c']))
{
    require_once "Controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    // buscamos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "Controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Función para llamar las acciones a ejecutar
    call_user_func( array( $controller, $accion ) );
}
?>