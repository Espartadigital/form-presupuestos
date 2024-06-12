<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCliente = htmlspecialchars(trim($_POST["nombreCliente"]));
    $webCliente = htmlspecialchars(trim($_POST["webCliente"]));
    $plazoCliente = htmlspecialchars(trim($_POST["plazoCliente"]));
    $tienda = htmlspecialchars(trim($_POST["tienda"]));
    $blog = htmlspecialchars(trim($_POST["blog"]));
    $hosting = htmlspecialchars(trim($_POST["hosting"]));
    $contenidos = htmlspecialchars(trim($_POST["contenidos"]));
    $mantenimiento = htmlspecialchars(trim($_POST["mantenimiento"]));
    $multiIdioma = htmlspecialchars(trim($_POST["multiIdioma"]));
    $numIdiomas = htmlspecialchars(trim($_POST["numIdiomas"]));
    $urlLogin = htmlspecialchars(trim($_POST["urlLogin"]));
    $usuarioLogin = htmlspecialchars(trim($_POST["usuarioLogin"]));
    $contraseniaLogin = htmlspecialchars(trim($_POST["contraseniaLogin"]));
    $comentarioAccount = htmlspecialchars(trim($_POST["comentarioAccount"]));

    $to = "dev@espartadigital.com";
    $subject = "Nuevo presupuesto solicitado";
    $message = "
        Nombre del Cliente: $nombreCliente\n
        Web del Cliente: $webCliente\n
        Plazo y Presupuesto: $plazoCliente\n
        ¿Es una tienda o va a necesitarla?: $tienda\n
        ¿Tiene blog?: $blog\n
        ¿Necesitan hosting web?: $hosting\n
        ¿Necesitan tener los contenidos antiguos?: $contenidos\n
        ¿Van a contratar mantenimiento posteriormente?: $mantenimiento\n
        ¿Es una web multi-idioma?: $multiIdioma\n
        Número de Idiomas: $numIdiomas\n
        URL de Login: $urlLogin\n
        Usuario: $usuarioLogin\n
        Contraseña: $contraseniaLogin\n
        Comentarios: $comentarioAccount
    ";
    $headers = "From: dev@espartadigital.com" . "\r\n" .
               "Reply-To: dev@espartadigital.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Hubo un problema al enviar el correo.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
