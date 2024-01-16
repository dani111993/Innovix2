<?php
// cerrar_sesion.php - Página para cerrar sesión

// Iniciar sesión
session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redirigir a la página de inicio de sesión
header("Location: iniciosesion.php");
exit();
?>