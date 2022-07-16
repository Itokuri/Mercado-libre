<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="estilos.css">
    <title>Seguimiento</title>

</head>
<body onload="f()">
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

       <?php 
    session_start();
    if(empty($_SESSION["usuario"])){
        echo "error";
    }else{
        $variable = $_SESSION["usuario"];
    }

    echo $variable;
?>

        <form action="pedidos1.php" method="get">   
            <center>   
            <div class="formpedido1"> 
                <p>Ingrese los datos del paquete</p> 
                <br>          
                <label for="idpedido">Ingrese el ID del pedido:</label><br></br>
                <input type="text" id="idpedido"name="idpedido"><br></br>
                <label for="nombre">Ingrese el nombre del producto:</label><br></br>
                <input type="text" id="nombre"name="nombre"><br></br>
                <label for="espacio">Ingrese la cantidad de espacio que ocupa: </label><br></br>
                <input type="date" id="fecha"name="fecha"><br></br>
                <label for="almacen">Ingrese el numero de almacen: </label><br></br>
                <input type="text" id="Ocupado"name="Ocupado"><br></br>
                <button type="submit" name="button">Finalizar pedido</button> 
            </div>
        </center>
        </form>   
    
    
</body>
</html>