<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {
    public $email;
    public $nombre;
    public $token;
    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }
    public function enviarConfirmacion() {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'ba65bb3aa2d1b2';
        $mail->Password = '3272d2a6a0311b';
        $mail->SMTPSecure = 'tls';
        //Configurar el contenido del email
        $mail->setFrom('admin@appsalon.com');
        $mail->addAddress('admin@appsalon.com', 'Appsalon.com');
        $mail->Subject = 'Tienes un nuevo mensaje';
        //Habilitar HTML

        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en AppSalon, solo debes confirmarla en el siguiente enlace: </p>";
        $contenido .= "<a href='http://localhost:8080/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";
        $contenido .= "<p>Si tu no creaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;
        $mail->send();
    }
    public function recuperarPassword() {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'ba65bb3aa2d1b2';
        $mail->Password = '3272d2a6a0311b';
        $mail->SMTPSecure = 'tls';
        //Configurar el contenido del email
        $mail->setFrom('admin@appsalon.com');
        $mail->addAddress('admin@appsalon.com', 'Appsalon.com');
        $mail->Subject = 'Recupera tu contraseña';
        //Habilitar HTML

        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado recuperar tu contraseña, para hacerlo da click en el siguiente enlace:</p>";
        $contenido .= "<a href='http://localhost:8080/recuperar?token=" . $this->token . "'>Recupera tu contraseña</a>";
        $contenido .= "<p>Si tu no solicitaste una nueva contraseña, cambiala en tu cuenta</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;
        $mail->send();
    }
}