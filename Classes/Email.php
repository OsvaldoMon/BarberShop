<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{

  public $email;
  public $nombre;
  public $token;

  public function __construct($email, $nombre, $token)
  {
    $this->email = $email;
    $this->nombre = $nombre;
    $this->token = $token;
  }

  public function enviarConfirmacion()
  {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '80ff6bb2ef6363';
    $mail->Password = '5f5ccf790a9a40';

    $mail->setFrom('barbershop@gmail.com');
    $mail->addAddress('barbershop@gmail.com', 'barbershop.com');
    $mail->Subject = 'Confirma tu cuenta';

    // Set HTML
    $mail->isHTML(TRUE);
    $mail->CharSet = 'UTF-8';

    $contenido = '<html>';
    $contenido .= "<p><strong>Hola " . $this->email .  "</strong> Has Creado tu cuenta, solo debes confirmarla presionando el siguiente enlace</p>";
    $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";
    $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
    $contenido .= '</html>';
    $mail->Body = $contenido;

    $mail->send();
  }

  public function enviarInstrucciones()
  {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '80ff6bb2ef6363';
    $mail->Password = '5f5ccf790a9a40';

    $mail->setFrom('barbershop@gmail.com');
    $mail->addAddress('barbershop@gmail.com', 'barbershop.com');
    $mail->Subject = 'Reestablece tu password';

    // Set HTML
    $mail->isHTML(TRUE);
    $mail->CharSet = 'UTF-8';

    $contenido = '<html>';
    $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu password</p>";
    $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar-password?token=" . $this->token . "'>Reestablecer password</a>";
    $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
    $contenido .= '</html>';
    $mail->Body = $contenido;

    $mail->send();
  }
}
