<?php
//require 'phpmailer/config_mail.php';
echo '<p>test0</p>';
require 'PHPMailer\PHPMailer\PHPMailer.php';
require 'PHPMailer\PHPMailer\SMTP.php';
require 'PHPMailer\PHPMailer\Exception.php';

echo '<p>test1</p>';
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
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'ssl://smtp.mail.ru';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'vadim2_1423@mail.ru';                     // SMTP username
        $mail->Password   = 'agdWGHwc@s07d2sr';                               // SMTP password
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->CharSet = "UTF-8";

        //Recipients
        $mail->setFrom('vadim2_1423@mail.ru', 'Вадим');        //Отправитель и его имя
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