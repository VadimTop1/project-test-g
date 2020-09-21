<?php

// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

class Mail
{
    //private $body;  //Тело письма
    //private $title; //Заголовок письма
    private $result;
    private $status;
    public function __construct(string $body, string $title)
    {
        if(!isset($body)|| !isset($title))
        return;
        // Настройки PHPMailer
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        try {
            $mail->isSMTP();
            $mail->CharSet = "UTF-8";
            $mail->SMTPAuth   = true;
            //$mail->SMTPDebug = 2;
            //$mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

            // Настройки вашей почты
            $mail->Host       = 'ssl://smtp.mail.ru'; // SMTP сервера вашей почты
            $mail->Username   = 'vadim2_1423@mail.ru'; // Логин на почте
            $mail->Password   = 'agdWGHwc@s07d2sr'; // Пароль на почте
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->setFrom('vadim2_1423@mail.ru', 'Вадим'); // Адрес самой почты и имя отправителя

            // Получатель письма
            $mail->addBCC('vadim_1423@mail.ru');
            $mail->addBCC('skorpion.mega.krut@gmail.com'); // Ещё один, если нужен

            // Прикрипление файлов к письму
            //if (!empty($file['name'][0])) {
            //    for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
            //        $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
            //        $filename = $file['name'][$ct];
            //        if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
            //            $mail->addAttachment($uploadfile, $filename);
            //            $rfile[] = "Файл $filename прикреплён";
            //        } else {
            //            $rfile[] = "Не удалось прикрепить файл $filename";
            //        }
            //    }
            //}
            //$rfile[] = "нету";
            $mail->addAttachment('./files/2044.xlsx', 'Пример excel.xlsx');
            // Отправка сообщения
            $mail->isHTML(true);
            $mail->Subject = $title;
            $mail->Body = $body;

            // Проверяем отравленность сообщения
            if ($mail->send())
                $this->result = "success";
            else
                $this->result = "error";

        } catch (Exception $e) {
            $this->result = "error";
            $this->status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
        }
    }

    public function inf()
    {
        echo json_encode(["result" => $this->result, /*"resultfile" => $rfile,*/ "status" => $this->status]);
    }
}