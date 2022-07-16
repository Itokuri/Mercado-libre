<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de pedidos</title>
</head>
<body>

<?php

    $host='localhost';
    $user='root';
    $password='';
    $baseDeDatos='estanteria';

    $conexion=mysqli_connect($host,$user,$password,$baseDeDatos)
    or die('Error al conectarse.');


$idpedido=$_GET['idpedido'];
$nombre=$_GET['nombre'];
$fecha=$_GET['fecha'];
$ocupado=$_GET['Ocupado'];


$instruccion= "UPDATE estanteria SET Producto='$nombre', Fecha_ingreso= '$fecha', Ocupado= $ocupado WHERE id=$idpedido ";
    if(mysqli_query($conexion,"Select Ocupado from estanteria Where Ocupado = 0 and id = $idpedido"))  {
        $sql= mysqli_query($conexion,$instruccion);
    }else{
        echo("Espacio ocupado ingresar en otro espacio");
    };


    $resultado = mysqli_query($conexion, $instruccion);

    mysqli_close($conexion);

?>

<a href="index.html">Volver a Inicio</a> 
</body>
</html>