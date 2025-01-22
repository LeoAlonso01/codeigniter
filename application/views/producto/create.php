<!DOCTYPE html>
<html>

<head>
    <title>Agregar Producto</title>
</head>

<body>
    <div class="container">
        <h1>Agregar Producto</h1>
        <form method="post" action="<?= site_url('producto/store/') ?>">
            <label>Nombre:</label>
            <input type="text" name="nombre" required><br>
            <label>Descripción:</label>
            <textarea name="descripcion"></textarea><br>
            <label>Precio:</label>
            <input type="number" name="precio" step="0.01" required><br>
            <button type="submit">Guardar</button>
        </form>
    </div>

</body>

</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>