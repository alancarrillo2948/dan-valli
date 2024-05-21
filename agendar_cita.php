<?php
require_once("config.php");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

function escapar_entrada($valor)
{
    global $conn;
    return mysqli_real_escape_string($conn, $valor);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = escapar_entrada($_POST['nombre']);
    $correo = escapar_entrada($_POST['correo']);
    $fecha = escapar_entrada($_POST['fecha']);
    $hora = escapar_entrada($_POST['hora']);
    $telefono = escapar_entrada($_POST['telefono']);

    $fechaHora = $fecha . ' ' . $hora;

    if ($conn->connect_error) {
        die('Error de conexión: ' . $conn->connect_error);
    }

    $sql = "INSERT INTO cita (nombre, correo, fecha_y_hora_de_la_cita, telefono) VALUES ('$nombre', '$correo', '$fechaHora', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente en la tabla cita.";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }

    // Enviar correo HTML con la información de la cita
    $to = $correo;
    $subject = "Confirmación de cita";
    $message = "
    <html>
    <head>
    <title>Confirmación de cita</title>
    </head>
    <body>
    <h1>Confirmación de cita</h1>
    <p>Estimado(a) $nombre,</p>
    <p>Su cita ha sido programada para el día $fecha a las $hora.</p>
    <p>Gracias por elegir nuestros servicios.</p>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: tu_correo@dominio.com" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }

    $conn->close();
}
?>