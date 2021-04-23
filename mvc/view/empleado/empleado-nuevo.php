<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=empleado">Empleado</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-unidad" action="?c=empleado&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Nombres</label>
      <input type="text" name="nombres" value="<?php echo $uni->nombres; ?>" class="form-control" placeholder="Nombres" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="apellidos" value="<?php echo $uni->apellidos; ?>" class="form-control" placeholder="Apellidos" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Numero de Documento de identidad Unico</label>
        <input type="text" name="numero_identidad" value="<?php echo $uni->numero_identidad; ?>" class="form-control" placeholder="Ingrese DUI" data-validacion-tipo="requerido|min:100" />
    </div>    
    <div class="form-group">
        <label>Sexo</label>
       <select name="sexo" class="form-control">
       <option value="M">Masculino</option>
       <option value="F">Femenino</option>
       </select>
    </div>
    <div class="form-group">
        <label>Estado Civil</label>
       <select name="estado_civil" class="form-control">
       <option value="Soltero(a)">Soltero(a)</option>
       <option value="Casado(a)">Casado(a)</option>
       <option value="Viudo(a)">Viudo(a)</option>
       </select>
    </div>
    <div class="form-group">
        <label>Correo Electronico</label>
        <input type="text" name="correo" value="<?php echo $uni->correo; ?>" class="form-control" placeholder="Ingrese correo electronico" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $uni->telefono; ?>" class="form-control" placeholder="Ingrese telefono" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>Celular</label>
        <input type="text" name="numero_movil" value="<?php echo $uni->numero_movil; ?>" class="form-control" placeholder="Ingrese celular" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>Fecha Nacimiento</label>
        <input type="text" name="fecha_nacimiento" value="<?php echo $uni->fecha_nacimiento; ?>" class="form-control" placeholder="dia/mes/año" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Usuario Registro</label>
        <input type="text" name="usuario_registro" value="<?php echo $uni->usuario_registro; ?>" class="form-control" placeholder="Ingrese usuario registro" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>Estado</label>
       <select name="estado_empleado" class="form-control">
       <option value="1">Activo</option>
       <option value="0">Desactivado</option>
       </select>
    </div>  
    
    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-unidad").submit(function(){
            return $(this).validate();
        });
    })
</script>
