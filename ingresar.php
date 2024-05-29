<?php
session_start();
$servidor = "sql112.infinityfree.com";
$usuario = "if0_36634606";
$clave = "iX7kU20Zic";
$bd = "if0_36634606_semillero";
$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

if(isset($_POST["usuario"]) && isset($_POST["contrase"])){
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contrase"];

    $usuario = mysqli_real_escape_string($conexion, $usuario);
    $contraseña = mysqli_real_escape_string($conexion, $contraseña);

    $sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND contraseña='$contraseña'";
    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
        $filas = mysqli_num_rows($resultado);
        if($filas > 0){
            $fila = mysqli_fetch_assoc($resultado);
            $estado = "Bienvenido ".$fila["usuario"];
            $_SESSION["estado"] = $estado;
        } else {
            $estado = "Usuario o contraseña invalida";
            $_SESSION["estado"] = $estado;
        }
    } else {
        $_SESSION["estado"] = "Error en la consulta: " . mysqli_error($conexion);
    }
} else {
    $_SESSION["estado"] = "Por favor, complete el formulario";
}

mysqli_close($conexion);
header("Location: index.php");
exit();
?>
