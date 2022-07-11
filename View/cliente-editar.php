<h1 class="page-header">
    <?php echo $alm->idcliente != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Cliente">Cliente</a></li>
  <li class="active"><?php echo $alm->idcliente != null ? $alm->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idcliente" value="<?php echo $alm->idcliente; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese su nombre y Apellido" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $alm->direccion; ?>" class="form-control" placeholder="Ingrese su dirección" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="number" name="telefono" value="<?php echo $alm->telefono; ?>" class="form-control" placeholder="Ingrese su numero telefonico" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $alm->email; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
