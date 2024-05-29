<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso y crear</title>
    <style>
        * {

            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        body {
            display: grid;
            justify-content: center;
        }


        #contenedor {

            display: grid;
            grid-template-rows: repeat(2, auto);
            margin-top: 30%;
        }


        #Ingresar{

            width: 40%;
            margin: 0 auto;
        }
#ingresar_form{

    display: grid;
    border: 1px solid black;
    grid-template-areas:
    "ingresar ingresar"
    "usuario contraseña"
    "usuario_text contraseña_input"
    "sumit sumit";
    gap: 8px;
    align-items: center;
    justify-content: center;
    justify-items: center;
   
    
}

#ingresar_form input[type="submit"]{
    width: 20%;

}

#ingresar_form input[type="text"],input[type="password"]{
    width: 50%;

}
    </style>
</head>

<body>
    <div id="contenedor">

        <div id="Ingresar">
            <form action="ingresar.php" method="post" id="ingresar_form">
                <label for="ingresar" id="ingresar" style="grid-area:ingresar; margin-top: 5%;">Bienvenido de nuevo</label>
                <label for="usuario" style="grid-area:usuario;">usuario</label>
                <input type="text" name="usuario" style="grid-area:usuario_text;">
                <label for="Contraseña" style="grid-area:contraseña;">Contraseña</label>
                <input type="password" name="contrase" style="grid-area:contraseña_input;">
                <input type="submit" value="Enviar" style="grid-area:sumit; margin-bottom: 5%;">
            </form>

        </div>
        <div id="Crear_cuenta">
            <form action="registro.php" method="post" id="Crear_cuenta-fr">
                <label for="ingresar" id="ingresar">Registro</label>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
                <label for="apellido">apellido</label>
                <input type="text" name="apellido">
                <label for="apellido">correo</label>
                <input type="email" name="correo">
                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <label for="usuario">Usuario</label>
                <input type="text" name="usua">
                <input type="submit" value="Enviar">

            </form>

        </div>
    </div>
</body>

</html>