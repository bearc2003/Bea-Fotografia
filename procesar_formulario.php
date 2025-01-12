procesar_formulario.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['message']);

    // Dirección de correo donde se enviará el mensaje
    $destinatario = "beatriz.ruiz03@goumh.umh.es";  

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto desde el formulario";

    // Cuerpo del mensaje
    $cuerpo = "Nombre: $nombre\nCorreo electrónico: $email\n\nMensaje:\n$mensaje";

    // Cabeceras del correo
    $headers = "From: $email";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
    } else {
        echo "Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente.";
    }
}
?>
