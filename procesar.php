<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 1. INCLUIR LOS ARCHIVOS MANUALMENTE (Sustituye a Composer)
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // ... (Mantienes igual todo tu código de Honeypot, validación y sanitización) ...

    if (empty($errores)) {
        $mail = new PHPMailer(true);

        try {
            // Configuración para Gmail
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'tu_correo@gmail.com';
            $mail->Password   = 'abcd efgh ijkl mnop'; // Tu contraseña de aplicación
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
            $mail->CharSet    = 'UTF-8';

            // Remitente y destinatario
            $mail->setFrom('tu_correo@gmail.com', 'Web Caminando y Misionando');
            $mail->addAddress('tu_correo@gmail.com', 'Administración');
            $mail->addReplyTo($datos['email'], $datos['nombre']);

            // Contenido
            $mail->isHTML(true);
            $mail->Subject = 'Nuevo mensaje web: ' . $datos['asunto'];
            $mail->Body    = "<h2>Nuevo mensaje</h2><p><strong>Nombre:</strong> {$datos['nombre']}</p><p><strong>Email:</strong> {$datos['email']}</p><p><strong>Mensaje:</strong></p><p>" . nl2br($datos['mensaje']) . "</p>";
            $mail->AltBody = "Nombre: {$datos['nombre']}\nEmail: {$datos['email']}\nMensaje:\n{$datos['mensaje']}";

            $mail->send();
            echo "<p style='color: green;'>¡Mensaje enviado con éxito!</p>";

        } catch (Exception $e) {
            echo "<p style='color: red;'>Error al enviar el correo.</p>";
        }
    }
}
?>