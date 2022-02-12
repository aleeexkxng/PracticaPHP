<?php
    include('conexion.php');
    if(count($_POST) > 0){
        $modelo=$_POST['nombreModelo'];
        $talla=$_POST['talla'];
        $colorCamisa=$_POST['colorCamisa'];
        $cantidad=$_POST['cantidad'];

        $sql= "INSERT INTO inventariocamisas(nombreModelo,talla,colorCamisa,cantidad) VALUES ('$modelo','$talla','$colorCamisa','$cantidad')";

        $conn->exec($sql);
        header('Location: index.php');
    }
?>