<?php

if(
    isset($_POST['pdf2']) &&
    isset($_POST['name']) &&
    isset($_POST['mail']) &&
    isset($_POST['enter'])
    )
{
    echo '<br/><br/>'.$_POST['pdf2'].' | '.$_POST['name'].' | '.$_POST['mail'].'<br/>';

    // Сообщение
    $message = "Line 1\r\nLine 2\r\nLine 3";

    // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
    $message = wordwrap($message, 70, "\r\n");

    // Отправляем
    if( mail('caffeinated@example.com', 'My Subject', $message))
        echo "<br/>Отправленно!!";
    else
        echo "<br/>Ошибка!!";
}else
{
    echo '<br/><br/>Введите все данные!!!<br/>';
}