<?php

if(
    isset($_POST['pdf2']) &&
    isset($_POST['name']) &&
    isset($_POST['mail']) &&
    isset($_POST['enter'])
    )
{
    echo '<br/><br/>'.$_POST['pdf2'].' | '.$_POST['name'].' | '.$_POST['mail'].'<br/>';

    // несколько получателей
    $to = $_POST['mail']; // обратите внимание на запятую

    // тема письма
    $subject = 'Имя: '.$_POST['name'];

    // текст письма
    $message = '
    <html>
    <head>
    <title>Test отправка</title>
    </head>
    <body>
    <p>Here are the birthdays upcoming in August!</p>
    <table>
        <tr>
        <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
        </tr>
        <tr>
        <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
        </tr>
        <tr>
        <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
        </tr>
    </table>
    </body>
    </html>
    ';

    // Для отправки HTML-письма должен быть установлен заголовок Content-type
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Дополнительные заголовки
    //$headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
    //$headers[] = 'From: Birthday Reminder <birthday@example.com>';
    //$headers[] = 'Cc: birthdayarchive@example.com';
    //$headers[] = 'Bcc: birthdaycheck@example.com';

    // Отправляем
    if(mail($to, $subject, $message, $headers))
        echo "<br/>Отправленно!!";
    else
        echo "<br/>Ошибка!!";
}else
{
    echo '<br/><br/>Введите все данные!!!<br/>';
}