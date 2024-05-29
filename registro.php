<?php
session_start();

$servidor = "localhost";
$usuario_db = "root";
$clave = "";
$bd = "semillero";
$conexion = mysqli_connect($servidor, $usuario_db, $clave, $bd);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if (isset($_POST["correo"], $_POST["usua"], $_POST["password"])) {
    $correo = mysqli_real_escape_string($conexion, $_POST["correo"]);
    $usuario = mysqli_real_escape_string($conexion, $_POST["usua"]);
    $contrasena = mysqli_real_escape_string($conexion, $_POST["password"]);

    $sql = "SELECT * FROM usuario WHERE usuario='$usuario'";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        if (mysqli_num_rows($resultado) > 0) {
            $_SESSION['estado2'] = "Usuario ya escogido, ingrese otro";
        } else {
            $sql2 = "INSERT INTO usuario (usuario, correo, contraseña) VALUES ('$usuario', '$correo', '$contrasena')";
            if (mysqli_query($conexion, $sql2)) {
                $_SESSION['estado2'] = "Registrado";
            } else {
                $_SESSION['estado2'] = "Error al registrar: " . mysqli_error($conexion);
            }
        }
    } else {
        $_SESSION['estado2'] = "Error en la consulta: " . mysqli_error($conexion);
    }
} else {
    $_SESSION['estado2'] = "Por favor, complete el formulario";
}

mysqli_close($conexion);

header("Location: index.php");
exit();
?>
