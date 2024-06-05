<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCliente = isset($_POST['nombreCliente']) ? htmlspecialchars($_POST['nombreCliente']) : '';
    $webCliente = isset($_POST['webCliente']) ? htmlspecialchars($_POST['webCliente']) : '';
    $plazoCliente = isset($_POST['plazoCliente']) ? htmlspecialchars($_POST['plazoCliente']) : '';
    $tienda = isset($_POST['tienda']) ? htmlspecialchars($_POST['tienda']) : '';
    $blog = isset($_POST['blog']) ? htmlspecialchars($_POST['blog']) : '';
    $hosting = isset($_POST['hosting']) ? htmlspecialchars($_POST['hosting']) : '';
    $contenidos = isset($_POST['contenidos']) ? htmlspecialchars($_POST['contenidos']) : '';
    $mantenimiento = isset($_POST['mantenimiento']) ? htmlspecialchars($_POST['mantenimiento']) : '';
    $multiIdioma = isset($_POST['multiIdioma']) ? htmlspecialchars($_POST['multiIdioma']) : '';
    $numIdiomas = isset($_POST['numIdiomas']) ? htmlspecialchars($_POST['numIdiomas']) : '';
    $urlLogin = isset($_POST['urlLogin']) ? htmlspecialchars($_POST['urlLogin']) : '';
    $usuarioLogin = isset($_POST['usuarioLogin']) ? htmlspecialchars($_POST['usuarioLogin']) : '';
    $contraseniaLogin = isset($_POST['contraseniaLogin']) ? htmlspecialchars($_POST['contraseniaLogin']) : '';
    $comentarioAccount = isset($_POST['comentarioAccount']) ? htmlspecialchars($_POST['comentarioAccount']) : '';

    $to = 'dev@espartadigital.com';
    $subject = 'Nuevo Presupuesto';
    $message = "Nombre Cliente: $nombreCliente\n"
             . "Web Cliente: $webCliente\n"
             . "Plazo y Presupuesto: $plazoCliente\n"
             . "\n"
             . "¿Es una tienda?: $tienda\n"
             . "¿Tiene blog?: $blog\n"
             . "¿Necesitan hosting web?: $hosting\n"
             . "¿Necesitan tener los contenidos antiguos?: $contenidos\n"
             . "¿Van a contratar mantenimiento posteriormente?: $mantenimiento\n"
             . "\n"
             . "¿Es una web multi-idioma?: $multiIdioma\n"
             . "Número de idiomas: $numIdiomas\n"
             . "\n"
             . "URL login: $urlLogin\n"
             . "Usuario login: $usuarioLogin\n"
             . "Contraseña login: $contraseniaLogin\n"
             . "\n"
             . "Comentarios: $comentarioAccount";

    $headers = "From: dev@espartadigital.com\r\n"
             . "Reply-To: dev@espartadigital.com\r\n"
             . "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Método no permitido.";
}
?>
