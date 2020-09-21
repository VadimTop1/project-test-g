<?php
//require 'phpmailer/config_mail.php';
echo '<p>test0</p>';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if(
    isset($_POST['pdf2']) &&
    isset($_POST['name']) &&
    isset($_POST['mail']) &&
    isset($_POST['enter'])
    )
{
    $form_name = $_POST['name'];
    $form_mail = $_POST['mail'];
    echo '<br/><br/>'.$_POST['pdf2'].' | '.$_POST['name'].' | '.$_POST['mail'].'<br/>';

    //$mail = new Mail($body,  $title);
    //$mail->inf();
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        //$mail->Host       = 'ssl://smtp.mail.ru';
        $mail->Host       = 'ssl://smtp.gmail.com';
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'project.k.vadim';                     // SMTP username
        $mail->Password   = 'Ajd323Ljy5vu{p';                               // SMTP password
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->CharSet = "UTF-8";

        //Recipients
        $mail->setFrom('project.k.vadim', 'Вадим (Проект)');        //Отправитель и его имя
        $mail->addBCC($form_mail);

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('files/2044.xlsx', 'Пример excel.xlsx');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Тестируем отправку на почту';
        $mail->Body    = '
            <h2>Новое письмо</h2><br><br>
            <b>Имя:</b> '.$form_name.'<br>
            <b>Почта:</b> '.$form_mail.'<br>
        ';
        $mail->AltBody = 'Новое письмо. Имя: '.$form_name.', Почта: '.$form_mail;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}else
{
    echo '<br/><br/>Введите все данные!!!<br/>';
}