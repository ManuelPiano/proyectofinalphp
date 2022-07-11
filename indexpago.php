<?php
//Requiere que se cargue el archivo conexion.php de la carpeta Model
require_once 'Model/conexion.php';
//el controlador se llama pago
$controllerp = 'pago';

// Con esta sección hacemos el Controlador del Frontend
if(!isset($_REQUEST['p']))
{
    require_once "Controller/$controllerp.controller.php";
    $controllerp = ucwords($controllerp) . 'Controller';
    $controllerp = new $controllerp;
    $controllerp->Indexpago();    
}
else
{
    // buscamos el controlador que queremos cargar
    $controllerp = strtolower($_REQUEST['p']);
    $accion = isset($_REQUEST['b']) ? $_REQUEST['b'] : 'Indexpago';
    
    // Instanciamos el controlador
    require_once "Controller/$controllerp.controller.php";
    $controllerp = ucwords($controllerp) . 'Controller';
    $controllerp = new $controllerp;
    
    // Función para llamar las acciones a ejecutar
    call_user_func( array( $controllerp, $accion ) );
}
?>