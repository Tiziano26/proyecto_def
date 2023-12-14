<?php
include("conexion.php");

if(isset($_POST['register'])) {
    if(
        strlen($_POST['nombre'])>= 1 &&
        strlen($_POST['apellido'])>= 1 &&
        strlen($_POST['usuario'])>= 1 &&
        strlen($_POST['email'])>= 1 &&
        strlen($_POST['contraseña'])>= 1 
    ){
        $nom = trim ($_POST['nombre']);
        $ape = trim ($_POST['apellido']);
        $usu = trim ($_POST['usuario']);
        $email = trim ($_POST['email']);
        $cont = trim ($_POST['contraseña']);
        $consulta = "INSERT INTO registro (nombre, apellido, usuario, email, contraseña)
        VALUES ('$nom', '$ape', '$usu', '$email', '$cont')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado){
            ?>
            <h3 class ="succes">Tu registro se a completado</h3>
            <?php
        }else{
            ?>
            <h3 class ="error">Ocurrio un error</h3>
            <?php
        }
    } else{
        ?>
            <h3 class ="error">Llena todo los campos</h3>
            <?php
    }
}


?>