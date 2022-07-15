<?php
    require 'login.php';

    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    if(isset($usuario)&&isset($contrasenia)){
        include("conexion.php");
        $consulta_sql = "SELECT * FROM registro WHERE usuario = '".$usuario."' and contraseña='".$contrasenia."'";
        $envio_sql = $conexion->query($consulta_sql);
        if(($envio_sql->num_rows)>0){
            session_start();
            $_SESSION["usuario"]=$usuario;
            header("Location:pedidos.php");
            echo "Has iniciado sesion";
        }else{
            echo "Nombre de usuario y/o contraseña incorrectos";
        }
    }

?>
