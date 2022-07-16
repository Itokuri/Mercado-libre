<?php
    $conexion=mysqli_connect('localhost','root', '', 'estanteria');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iniciarsesion.css">
    <title>Registro de pedidos</title>
</head>
<body>
<div class="cabecera">
        <header>
          <nav>
           <ul class="menu">
            <li class="menuLi"> <a href="#" class="menuA"> Inicio </a></li> 
            <li class="menuLi" > <a href="verpedidos.php" class="menuA"> Pedidos </a></li> 
            <li class="menuLi"> <a href="borrarPedidos.php" class="menuA"> Delete </a></li> 
           </ul>
         </nav>
         </header>
       </div>
    <br>

    <table border="1" style="border: 1px solid black; margin-left: 30%;">
        <tr>
            <td>Numero de Estanteria</td>
            <td>Numero de Altura</td>
            <td>Numero De Base</td>
            <td>Fecha de Ingreso</td>
            <td>Producto</td>
            <td>Ocupado</td>
        </tr>

        <?php
        
        $inst2="select* from estanteria where Ocupado = 1";
              
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
</body>
</html>