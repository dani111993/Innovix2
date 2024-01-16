<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro formulario</title>
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

        /* Estilos adicionales */
        .contact-info,
        .nav-links,
        .nav-items,
        .nav-icon,
        .cart,
        .user,
        li:hover,
        .nombre_compania,
        a:link,
        a:visited,
        a:hover,
        a:active {
            /* Aplica los estilos del código CSS proporcionado */
            font-size: 12px;
            font-size: 19px;
            font-weight: 500;
            color: #212934;
            margin-right: 100px;
            padding: 5px;
            margin-right: 21px;
            top: 1rem;
            right: 3.4rem;
            padding: 0px 6px;
            font-size: small;
            background: rgb(221, 221, 221);
            color: rgb(33, 37, 41);
            text-decoration: none;
        }

        li:hover {
            background-color: rgb(33, 37, 41);
            border-radius: 80%;
            color: rgb(221, 221, 221);
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="text" name="email"><br>
        <label for="confirmaremail">Confirmar Email:</label>
        <input type="text" name="confirmaremail"><br>
        <label for="password">Contraseña:</label>
        <input type="text" name="password"><br>
        <label for="confirmarpassword">Confirmar Contraseña:</label>
        <input type="text" name="confirmarpassword"><br>
        <input type="submit" value="Registrar" name="registrar">
    </form>

    <?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "register";

    $conexion = new mysqli($servidor, $usuario, $clave, $bd);

    if (isset($_POST['registrar'])) {
        // Asignar valores a las variables
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $confirmaremail = isset($_POST['confirmaremail']) ? $_POST['confirmaremail'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $confirmarpassword = isset($_POST['confirmarpassword']) ? $_POST['confirmarpassword'] : '';

        // Evitar SQL injection usando sentencias preparadas
        $insertar = $conexion->prepare("INSERT INTO users (email, confirmaremail, password, confirmarpassword) VALUES (?, ?, ?, ?)");
        $insertar->bind_param("ssss", $email, $confirmaremail, $password, $confirmarpassword);

        if ($insertar->execute()) {
            echo "Registro exitoso.";
        } else {
            echo "Error al registrar: " . $insertar->error;
        }

        $insertar->close();
    }
    ?>
</body>
</html>
