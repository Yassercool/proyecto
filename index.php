<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* Estilo personalizado para SweetAlert2 */
       
    </style>
</head>
<body>

<?php
session_start();
if(isset($_SESSION["estado"])) {
    $estado = $_SESSION["estado"];
    unset($_SESSION["estado"]); // Limpiar el mensaje después de mostrarlo
} elseif(isset($_SESSION["estado2"])){
    $estado2 = $_SESSION["estado2"];
    unset($_SESSION["estado2"]);
}
?>

<header>
    <div class="logo">XeXe</div>
    <nav>
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="https://cdn.memegenerator.es/descargar/31252770">Blog</a></li>
            <li><a href="https://cdn.memegenerator.es/descargar/31252770">Servicios</a></li>
            <li><a href="https://cdn.memegenerator.es/descargar/31252770">Acerca de</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <div id="iniciar" class="form-container active">
        <h2>Iniciar Sesión</h2>
        <form action="ingresar.php" method="post">
            <input type="text" placeholder="Usuario" required name="usuario">
            <input type="password" placeholder="Contraseña" required name="contrase">
            <button type="submit">Entrar</button>
            <p>¿No tienes una cuenta? <a href="#" id="xd">Crear una cuenta</a></p>
        </form>
    </div>
    <div id="registrar" class="form-container">
        <h2>Crear Cuenta</h2>
        <form action="registro.php" method="post">
            <input type="text" placeholder="Usuario" required name="usua">
            <input type="email" placeholder="Correo Electrónico" required name="correo">
            <input type="password" placeholder="Contraseña" required name="password">
            <button type="submit">Registrar</button>
            <p>¿Ya tienes una cuenta? <a href="#" id="que">Iniciar Sesión</a></p>
        </form>
    </div>
</div>

<footer>
    <p>&copy; 2024 XeXe. Todos los derechos reservados.</p>
</footer>

<script src="scripts.js"></script>

<script>
    <?php
    if(isset($estado)) {
        echo "mostrarAviso('$estado');";
    } elseif(isset($estado2)){
        echo "mostrarAviso('$estado2');";
    }
    ?>

    function mostrarAviso(mensaje) {
        Swal.fire({
            title: 'Aviso',
            text: mensaje,
            icon: 'info',
            confirmButtonText: 'Aceptar',
            customClass: {
                confirmButton: 'swal2-confirm',
                popup: 'swal2-popup-custom'
            },
            didOpen: () => {
                const icon = Swal.getIcon();
                icon.classList.add('swal2-icon-custom');
            }
        });
    }
</script>

</body>
</html>
