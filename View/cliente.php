<h1 class="page-header">clientes</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Cliente&a=Crud">Agregar Cliente</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Nombre</th>
            <th >Direccion</th>
            <th >telefono</th>
            <th >Correo</th>
            <th>Pagos</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->email; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Pago&a=Crud&idcliente=<?php echo $r->idcliente; ?>"> Pagos</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Cliente&a=Crud&idcliente=<?php echo $r->idcliente; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Cliente&a=Eliminar&idcliente=<?php echo $r->idcliente; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
