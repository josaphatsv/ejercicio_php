<h1 class="page-header">Empleado </h1>

<div class="well well-sm text-right">
        <a class="btn btn-primary" href="?c=empleado&a=Nuevo">Nueva Empleado</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Id Empleado</th>
            <th style="width:200px;">Nombres</th>
            <th style="width:120px;">Apellidos</th>
            <th style="width:120px;">DUI</th>
            <th style="width:120px;">Estado civil</th>
            <th style="width:120px;">Usuario Registro</th>
            <th style="width:120px;">Usuario Modifico</th>
            <th style="width:190px;">Fecha Registro</th>
            <th style="width:120px;">Fecha Modifico</th>
            <th style="width:120px;">Estado Unidad</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_empleado; ?></td>
            <td><?php echo $r->nombres; ?></td>
            <td><?php echo $r->apellidos; ?></td>
            <td><?php echo $r->numero_identidad; ?></td>
            <td><?php echo $r->estado_civil; ?></td>
            
            <td><?php echo $r->usuario_registro; ?></td>
            <td><?php echo $r->usuario_modifico; ?></td>
            <td><?php echo date("d-m-Y", strtotime($r->fecha_registro)); ?></td>
             <td><?php echo date("d-m-Y", strtotime($r->fecha_modifico)); ?></td>
             <td><?php echo ($r->estado_empleado==1) ? " Activo " : "Desactivado" ; ?></td>
             <td>
                <a href="?c=empleado&a=Crud&id_empleado=<?php echo $r->id_empleado; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=empleado&a=Eliminar&id_empleado=<?php echo $r->id_empleado; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
