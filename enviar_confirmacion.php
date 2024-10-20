<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $confirmados = $_POST['confirmados'];

    // Validación básica
    if (empty($nombre) || empty($email) || empty($confirmados)) {
        echo "Por favor, complete todos los campos.";
        exit;
    }

    // Mensaje de depuración
    echo "Nombre: $nombre<br>";
    echo "Email: $email<br>";
    echo "Confirmados: $confirmados<br>";

    $destinatario = "ben31_rc@hotmail.com";
    $asunto = "Confirmación de Asistencia a la Boda";
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo electrónico: $email\n";
    $mensaje .= "Número de confirmados: $confirmados\n";

    if (mail($destinatario, $asunto, $mensaje)) {
        echo "Confirmación enviada con éxito. ¡Gracias!";
    } else {
        echo "Hubo un problema al enviar la confirmación. Inténtalo de nuevo más tarde.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
