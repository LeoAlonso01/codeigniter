<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

<body>
    <div class="container container-fluid mb-3">
        <br>
        <h1>Agregar Producto</h1>
        <form method="post" action="<?= site_url('producto/store/') ?>">
            <label class="form-label" >Nombre:</label>
            <input class="form-control"  type="text" name="nombre" required><br>
            <label class="form-label" >Descripción:</label>
            <textarea class="form-control" name="descripcion"></textarea><br>
            <label class="form-text" >Precio:</label>
            <input class="form-control" type="number" name="precio" step="0.01" required><br>
            <button class="btn btn-primary type="submit">Guardar</button>
        </form>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>