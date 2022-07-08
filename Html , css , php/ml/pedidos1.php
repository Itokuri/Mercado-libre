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

$idpedido=$_GET['idpedido'];
echo "ID del pedido: ";
echo $idpedido;
echo " ";

$nombre=$_GET['nombre'];
echo "Nombre: ";
echo $nombre;
echo " ";

$cantidad=$_GET['cantidad'];
echo "Direccion: ";
echo $cantidad;
echo " ";

$almacen=$_GET['almacen'];
echo "Fecha de compra: ";
echo $almacen;
echo " ";

$espacio=$_GET['espacio'];
echo "Fragil: ";
echo $espacio;
echo " ";

$estanteria=$_GET['estanteria'];
echo "Fecha de entrega: ";
echo $estanteria;
echo " ";

$instruccion="insert into estanteria(id_producto, producto, cantidad, nro_almacen, nro_espacio, nro_estanteria) values('$idpedido','$nombre','$cantidad', '$almacen', '$espacio', '$estanteria')";
    $host='localhost';
    $user='root';
    $password='';
    $baseDeDatos='mercado_libre';

    $conexion=mysqli_connect($host,$user,$password,$baseDeDatos)
    or die('Error al conectarse.');
    $resultado = mysqli_query($conexion, $instruccion);

    mysqli_close($conexion);

?>

<a href="index.html">Volver a Inicio</a> 
</body>
</html>