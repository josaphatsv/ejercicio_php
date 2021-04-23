<?php
require_once 'model/empleados.php';

class empleadoController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new empleados();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/empleado/empleado.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $uni = new empleados();

        if(isset($_REQUEST['id_empleado'])){
            $uni = $this->model->Obtener($_REQUEST['id_empleado']);
        }

        require_once 'view/header.php';
        require_once 'view/empleado/empleado-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $uni = new empleados();

        require_once 'view/header.php';
        require_once 'view/empleado/empleado-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
      
					
        $emp = new empleados();
        $emp->nombres = $_REQUEST['nombres'];
        $emp->apellidos = $_REQUEST['apellidos'];
        $emp->numero_identidad = $_REQUEST['numero_identidad'];
        $emp->estado_civil = $_REQUEST['estado_civil'];
        $emp->sexo = $_REQUEST['sexo'];
        $emp->correo = $_REQUEST['correo'];
        $emp->telefono = $_REQUEST['telefono'];
        $emp->numero_movil = $_REQUEST['numero_movil'];
        $emp->fecha_nacimiento = $_REQUEST['fecha_nacimiento'];        
        $emp->usuario_registro = $_REQUEST['usuario_registro'];        
        $emp->estado_empleado = $_REQUEST['estado_empleado'];
        $this->model->Registrar($emp);

        header('Location: index.php?c=empleado');
    }

    public function Editar(){
        $emp = new empleados();
        $emp->nombres = $_REQUEST['nombres'];
        $emp->apellidos = $_REQUEST['apellidos'];
        $emp->numero_identidad = $_REQUEST['numero_identidad'];
        $emp->estado_civil = $_REQUEST['estado_civil'];
        $emp->sexo = $_REQUEST['sexo'];
        $emp->correo = $_REQUEST['correo'];
        $emp->telefono = $_REQUEST['telefono'];
        $emp->numero_movil = $_REQUEST['numero_movil'];
        $emp->fecha_nacimiento = $_REQUEST['fecha_nacimiento'];        
        $emp->usuario_modifico = $_REQUEST['usuario_modifico'];        
        $emp->estado_empleado = $_REQUEST['estado_empleado'];
        $emp->id_empleado = $_REQUEST['id_empleado'];

        $this->model->Actualizar($emp);

        header('Location: index.php?c=empleado');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_empleado']);
        header('Location: index.php?c=empleado');
    }
}
