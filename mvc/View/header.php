<?php 
$seleU ='class="active"';
$seleE ="";

if(isset($_REQUEST['c'])){
  if($_REQUEST['c']=="U"){
    $seleU ='class="active"';
  }else{
    $seleU ="";
  }

  if($_REQUEST['c']=="E"){
    $seleE ='class="active"';
  }else{
    $seleE ="";
  }
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Josaphat Lopez </title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/demo.css">
	<link rel="stylesheet" href="assets/css/footer-distributed.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">        
	</head>
    <body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">CRUD</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">CRUD</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php echo $seleU; ?> ><a href="index.php?c=U">Unidades</a></li>
            <li <?php echo $seleE; ?> ><a href="index.php?c=E">Empleado</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <hr class="m-t-0 m-b-40">
    <div class="container">
    <div id="page-wrapper">
            <div class="container-fluid">


