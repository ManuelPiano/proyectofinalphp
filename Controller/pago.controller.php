<?php
require_once 'Model/pago.php';

class PagoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Pago();
    }
    
    public function Indexpago(){
        require_once 'View/header.php';
        require_once 'View/pago.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new Pago();
        
        if(isset($_REQUEST['idpago'])){
            $alm = $this->model->getting($_REQUEST['idpago']);
        }
        
        require_once 'View/header.php';
        require_once 'View/pago-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new Pago();
        
        $alm->idpago = $_REQUEST['idpago'];
        $alm->fecha = $_REQUEST['fecha'];
        $alm->valorpago = $_REQUEST['valorpago'];
        $alm->concepto = $_REQUEST['concepto'];
        $alm->idcliente = $_REQUEST['idcliente'];

        // SI ID PERSONA ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA PERSONA, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idpago > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idpersona > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: indexpago.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idpago']);
        header('Location: indexpago.php');
    }
}
