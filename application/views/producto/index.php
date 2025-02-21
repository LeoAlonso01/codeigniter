<!DOCTYPE html>
<html>

<head>
    <title>Lista de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Productos</h1>
        <a class="btn btn-success" href="http://localhost/codeigniter/producto/create">Agregar Producto</a>
    </div>
    <br>
    <div class="container">
        <table class="table table-primary
        " border="1">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $producto['nombre'] ?></td>
                    <td><?= $producto['descripcion'] ?></td>
                    <td><?= $producto['precio'] ?></td>
                    <td>
                        <a class="btn btn-light" href="<?= base_url('producto/edit/' . $producto['id_user']); ?>">Editar</a>
                        <a class="btn btn-warning" href="<?= base_url('producto/delete/' . $producto['id_user']); ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>