<?php


// Establecer la conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "register";

$conexion = new mysqli($servidor, $usuario, $clave, $bd);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            font-size: 12px; /* Tamaño de fuente similar al de .contact-info */
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #212934; /* Color similar al de .nav-links */
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1c262e; /* Color similar al de .nav-links en estado hover */
        }

        .message {
            margin-top: 15px;
            color: #333;
        }

        .error {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="text" name="email"><br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Iniciar Sesión" name="iniciar_sesion">
    </form>

    <?php
    
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['iniciar_sesion'])) {
         $email = isset($_POST['email']) ? $_POST['email'] : '';
         $password = isset($_POST['password']) ? $_POST['password'] : '';
 
         // Validar el inicio de sesión
         $consulta = $conexion->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
         $consulta->bind_param("ss", $email, $password);
         $consulta->execute();
         $resultado = $consulta->get_result();

 
         if ($resultado->num_rows > 0) {
             // Inicio de sesión exitoso, redirigir a la siguiente página
             header("Location: Innovix/index.html");
             exit();
         } else {
             echo "Error: Este usuario no está registrado.";
         }

         
        
 
         $consulta->close();
        }
    ?>
</body>
</html>
