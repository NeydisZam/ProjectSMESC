<?php
// Inicializa la sesión.
session_start();

// Limpia el array de sesión.
$_SESSION = array();

// Opcionalmente, puedes llamar a session_destroy() para asegurarte de que la sesión se destruya.
// session_destroy() no es necesario si solo quieres limpiar el array de sesión.
session_destroy();

header("Location: ../login.php"); // Asegúrate de reemplazar 'login.html' con la ruta correcta a tu página de inicio de sesión.
exit;
