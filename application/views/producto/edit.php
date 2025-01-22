<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form method="post" action="<?= site_url('producto/update/' . $producto['id']) ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required><br>
        <label>Descripción:</label>
        <textarea name="descripcion"><?= $producto['descripcion'] ?></textarea><br>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" value="<?= $producto['precio'] ?>" required><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
