<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

require_once 'config.php';

# Verificar si el usuario y la contraseña son correctos
$sql = "SELECT * FROM users WHERE name = '$usuario' AND password = '$contrasena'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Login successful');</script>";
    header('Location: agenda.php');
} else {
    echo "Usuario o contraseña incorrectos";
    header('Location: sesion.php');
}
?>