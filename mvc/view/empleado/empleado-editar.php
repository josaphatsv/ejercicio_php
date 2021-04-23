<h1 class="page-header">
Editar Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=empleado">Empleado</a></li>
  <li class="active">Editar Registro</li>
</ol>

<form id="frm-unidad" action="?c=empleado&a=Editar" method="post" enctype="multipart/form-data">
<input type="hidden" name="id_empleado" value="<?php echo  $uni->id_empleado; ?>" />
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
       <option value="M" <?php echo ($uni->estado_empleado=="M") ? "selected" :"" ; ?>>Masculino</option>
       <option value="F" <?php echo ($uni->estado_empleado=="F") ? "selected" :"" ; ?>>Femenino</option>
       </select>
    </div>
    <div class="form-group">
        <label>Estado Civil</label>
       <select name="estado_civil" class="form-control">
       <option value="Soltero(a)" <?php echo ($uni->estado_civil=="Soltero(a)") ? "selected" :"" ; ?>>Soltero(a)</option>
       <option value="Casado(a)" <?php echo ($uni->estado_civil=="Casado(a)") ? "selected" :"" ; ?>>Casado(a)</option>
       <option value="Viudo(a)" <?php echo ($uni->estado_civil=="Viudo(a)") ? "selected" :"" ; ?>>Viudo(a)</option>
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
        <input type="text" name="fecha_nacimiento" value="<?php echo date("d-m-Y",strtotime($uni->fecha_nacimiento)); ?>" class="form-control" placeholder="dia/mes/año" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Usuario Modifico</label>
        <input type="text" name="usuario_modifico" value="<?php echo $uni->usuario_modifico; ?>" class="form-control" placeholder="Ingrese usuario registro" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>Estado</label>
       <select name="estado_empleado" class="form-control">
       <option value="1" <?php echo ($uni->estado_empleado==1) ? "selected" :"" ; ?> >Activo</option>
       <option value="0" <?php echo ($uni->estado_empleado==0) ? "selected" :"" ; ?>>Desactivado</option>
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
