<?php
    $conexion=mysqli_connect('localhost','root', '', 'mercado_libre');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de pedidos</title>
</head>
<body>
    <br>

    <table border="1">
        <tr>
            <td>ID del pedido</td>
            <td>Nombre del producto</td>
            <td>Cantidad de productos</td>
            <td>Espacio que ocupa</td>
            <td>Almacen</td>
            <td>Estanteria</td>
        </tr>

        <?php
        
        $inst2="select* from estanteria";
              
            $resultado2 = mysqli_query($conexion, $inst2);    

        while($mostrar=mysqli_fetch_array($resultado2)){
            ?>

            <tr>
                <td><?php echo $mostrar['id_producto']?></td>
                <td><?php echo $mostrar['producto']?></td>
                <td><?php echo $mostrar['cantidad']?></td>
                <td><?php echo $mostrar['nro_espacio']?></td>
                <td><?php echo $mostrar['nro_almacen']?></td>   
                <td><?php echo $mostrar['nro_estanteria']?></td>
            </tr>
        <?php
        }
        mysqli_close($conexion);
        ?>
    </table>
    <a href="index.html">Volver a Inicio</a> 
</body>
</html>