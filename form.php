<?php
//require 'phpmailer/config_mail.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(
    isset($_POST['pdf2']) &&
    isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['mail']) && !empty($_POST['mail']) &&
    isset($_POST['enter'])
    )
{
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    echo '<br/><br/>'.$_POST['pdf2'].' | '.$_POST['name'].' | '.$_POST['mail'].'<br/>';

    //$mail = new Mail($body,  $title);
    //$mail->inf();
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'ssl://smtp.mail.ru';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'vadim2_1423@mail.ru';                     // SMTP username
        $mail->Password   = 'agdWGHwc@s07d2sr';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->CharSet = "UTF-8";

        //Recipients
        $mail->setFrom('vadim2_1423@mail.ru', 'Вадим');        //Отправитель и его имя
        $mail->addBCC($mail);

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('/files/2044.xlsx', 'Пример excel.xlsx');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Тестируем отправку на почту';
        $mail->Body    = '
            <h2>Новое письмо</h2>
            <b>Имя:</b> '.$name.'<br>
            <b>Почта:</b> '.$mail.'<br><br>
        ';
        $mail->AltBody = 'Новое письмо. Имя: '.$name.', Почта: '.$mail;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}else
{
    echo '<br/><br/>Введите все данные!!!<br/>';
}