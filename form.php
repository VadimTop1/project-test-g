<?php
//require 'phpmailer/config_mail.php';
//echo '<p>test0</p>';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if(
    isset($_POST['pdf2']) &&
    !empty($_POST['name']) &&
    !empty($_POST['mail']) &&
    isset($_POST['enter'])
    )
{
    $form_name = $_POST['name'];
    $form_mail = $_POST['mail'];
    //echo '<br/><br/>'.$_POST['pdf2'].' | '.$_POST['name'].' | '.$_POST['mail'].'<br/>';

    //$mail = new Mail($body,  $title);
    //$mail->inf();
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        //$mail->SMTPDebug = 1;

        $mail->Host       = 'ssl://smtp.gmail.com';
        $mail->Username   = 'project.k.vadim@gmail.com';                     // SMTP username
        $mail->Password   = 'Ajd323Ljy5vurt3';                               // SMTP password

        //$mail->Host       = 'ssl://smtp.mail.ru'; // SMTP сервера вашей почты
        //$mail->Username   = 'vadim2_1423@mail.ru'; // Логин на почте
        //$mail->Password   = 'a12dASHc@sG6d2Ur'; // Пароль на почте

        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->CharSet = "UTF-8";

        //Recipients
        $mail->setFrom('project.k.vadim@gmail.com', 'Вадим (Проект "Test")');        //Отправитель и его имя
        //$mail->setFrom('vadim2_1423@mail.ru', 'Вадим (Проект "Test2")'); // Адрес самой почты и имя отправителя
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
        //echo 'Message has been sent';
        header('Location: '.$_SERVER["PHP_SELF"], true, 303);
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}else
{
    echo '<br/><br/>Введите все данные!!!<br/>';
}