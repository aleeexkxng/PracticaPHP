<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
</head>
<body>
    <?php
        include('conexion.php');
    ?>
    <h1>Inicio</h1>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="formulario.php">Formulario</a>
        </li>
    </ul>
    <?php
        $sql= "SELECT * FROM inventariocamisas";
        $stmt= $conn->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        echo "<b>Modelo</b>" . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . "<b>Talla</b>" . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . "<b>Color</b>" . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . "<b>Cantidad</b>";
        echo "<table>";
        foreach($stmt->fetchAll() as $row){
            echo "<tr>";
            echo "<th>" . $row['nombreModelo'] . "</th>";
            echo "<th>" . $row['talla'] . "</th>";
            echo "<th>" . $row['colorCamisa'] . "</th>";
            echo "<th>" . $row['cantidad'] . "</th>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>