<?php
require 'phpmailer/config_mail.php';

if(
    isset($_POST['pdf2']) &&
    isset($_POST['name']) &&
    isset($_POST['mail']) &&
    isset($_POST['enter'])
    )
{
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    echo '<br/><br/>'.$_POST['pdf2'].' | '.$_POST['name'].' | '.$_POST['mail'].'<br/>';

    // Формирование самого письма
    $title = "Заголовок письма";
    $body = "
        <h2>Новое письмо</h2>
        <b>Имя:</b> $name<br>
        <b>Почта:</b> $mail<br><br>
    ";

    $mail = new Mail($body,  $title);
    $mail->inf();
}else
{
    echo '<br/><br/>Введите все данные!!!<br/>';
}