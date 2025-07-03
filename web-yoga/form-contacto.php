<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $celular = htmlspecialchars($_POST["celular"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    $destino = "vaalyan32@gmail.com";
    $asunto = "Nuevo mensaje de tu sitio de Yoga";

    $contenido = "Nombre: $nombre\n";
    $contenido = "Email: $email\n";
    $contenido = "Celular: $celular\n";
    $contenido = "Mensaje:\n$mensaje";

    $headers = "Form: $email";

    mail($destino, $asunto, $contenido, $headers);
    echo "Mensaje enviado. ¡Gracias por contactarme!";
}
?>