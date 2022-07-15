<?php
    $conexion=mysqli_connect('localhost','root', '', 'estanteria');
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
            <td>Numero de Estanteria</td>
            <td>Numero de Altura</td>
            <td>Numero De Base</td>
            <td>Fecha de Ingreso</td>
            <td>Producto</td>
            <td>Ocupado</td>
        </tr>

        <?php
        
        $inst2="select* from estanteria where 'Ocupado' = 1";
              
            $resultado2 = mysqli_query($conexion, $inst2);    

        while($mostrar=mysqli_fetch_array($resultado2)){
            ?>

            <tr>
                <td><?php echo $mostrar['nro_est']?></td>
                <td><?php echo $mostrar['A']?></td>
                <td><?php echo $mostrar['B']?></td>
                <td><?php echo $mostrar['Fecha_ingreso']?></td>
                <td><?php echo $mostrar['Producto']?></td>   
                <td><?php echo $mostrar['Ocupado']?></td>
            </tr>
        <?php
        }
        mysqli_close($conexion);
        ?>
    </table>
    <a href="index.html">Volver a Inicio</a> 
</body>
</html>