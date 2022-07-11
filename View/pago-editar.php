<h1 class="page-header">
    <?php echo $alm->idpago != null ? $alm->idcliente : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?p=Pago">Pago</a></li>
  <li class="active"><?php echo $alm->idpago != null ? $alm->idcliente : 'Nuevo Registro'; ?></li>
</ol>

<form action="?p=Pago&b=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idpago" value="<?php echo $alm->idpago; ?>" />
    
    <div class="form-group">
        <label>Fecha</label>
        <input type="date" name="fecha" value="<?php echo $alm->fecha; ?>" class="form-control" />
    </div>
    
    <div class="form-group">
        <label>Valor del pago</label>
        <input type="text" name="valorpago" value="<?php echo $alm->valorpago; ?>" class="form-control" placeholder="Ingrese su pago en dolares $" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>Concepto</label>
        <input type="text" name="concepto" value="<?php echo $alm->concepto; ?>" class="form-control" placeholder="Concepto de pago" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label for="idcliente">Id Cliente</label>
        <select class="form-control" name="idcliente">
        <option value="<?php echo $alm->idcliente; ?>"></option>
        </select>
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
