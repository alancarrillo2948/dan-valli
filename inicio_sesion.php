<?php
require_once("config.php");

// Función para escapar caracteres especiales
function escapar_entrada($valor)
{
    global $conn;
    return mysqli_real_escape_string($conn, $valor);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario de inicio de sesión
    $usuario = escapar_entrada($_POST['usuario']);
    $contrasena = escapar_entrada($_POST['contrasena']);

    // Consulta para verificar el inicio de sesión
    $sql = "SELECT * FROM usuario WHERE nombre_de_usuario = '$usuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso, redirigir a galeria.php
        header("Location: galeria.php");
        exit();
    } else {
        // Inicio de sesión fallido, mostrar mensaje de error
        echo "<script>alert('Inicio de sesión fallido. Por favor, verifica tus credenciales.');</script>";
    }

    $conn->close();
}
?>