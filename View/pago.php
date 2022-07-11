<h1 class="page-header">Pagos</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?p=Pago&b=Crud">Nuevo Pago</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >idpago</th>
            <th >fecha</th>
            <th >valorpago</th>
            <th >concepto</th>
            <th >Cliente</th> 
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idpago; ?></td>
            <td><?php echo $r->fecha; ?></td>
            <td>$<?php echo $r->valorpago; ?></td>
            <td><?php echo $r->concepto; ?></td>
            <td><?php echo $r->idcliente; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?p=pago&b=Crud&idpago=<?php echo $r->idcliente; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?p=pago&b=Eliminar&idpago=<?php echo $r->idcliente; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
