<?php
    /**
     * Se llama la funcion conexion en el sitios de conexion 
     */
      require_once 'model/database.php';
     

  

  // Todo esta lógica hara el papel de un FrontController
  if(isset($_REQUEST['c']) && $_REQUEST['c']=="U")
  {
    $controller = 'unidad';

    //Llamado de la página principal
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();

  }else if(isset($_REQUEST['c']) && $_REQUEST['c']=="E")
  {
    $controller = 'empleado';
     //CRUD
     require_once "controller/$controller.controller.php";
     $controller = ucwords($controller) . 'Controller';
     $controller = new $controller;
     $controller->Index();
  }
  else
  {
    $controller = 'unidad';
    if(isset($_REQUEST['c'])){
      // Obtiene el controlador a cargar
      $controller = strtolower($_REQUEST['c']);
      $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

       // Instancia el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func( array( $controller, $accion ) );
    }else{
       // Instancia el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();
    }
   
  }

?>
