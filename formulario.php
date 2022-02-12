<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        include('conexion.php')
    ?>
    <h1>Inventario Camisas</h1>
    <ul>
    <li>
        <a href="index.php">Inicio</a>
    </li>
    <li>
        <a href="formulario.php">Formulario</a>
    </li>
    </ul>
    <form action="store.php" method="POST">
        <label for="nombreModelo">Modelo:</label>
        <input type="text" name="nombreModelo">
        <br>
        <label for="talla">Talla:</label>
        <select name="talla">
            <option value="Chica">CH</option>
            <option value="Mediana">M</option>
            <option value="Grande">G</option>
            <option value="ExtraG">EG</option>
        </select>
        <br>
        <label for="colorCamisa">Color:</label>
        <input type="text" name="colorCamisa">
        <br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>