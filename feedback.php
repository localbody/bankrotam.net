<?php

    $subject = "Обратная связь с BANKROTAM.NET";

    $name   = "Имя: " . isset($_POST["name"]) ? $_POST["name"] : "Без имени";
    $phone  = "Телефон: " . isset($_POST["phone"]) ? $_POST["phone"] : "Без телефона";
    $summa  = "Сумма долга: " . isset($_POST["summa"]) ? $_POST["summa"] : "Сумма не указана";
    $text   = "Сообщение: " . isset($_POST["text"]) ? $_POST["text"] : "Без текста";
    
    // Сообщение
    $message = "$name\r\n$phone\r\n$summa\r\n$text";
    // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
    $message = wordwrap($message, 70, "\r\n");

    // Отправляем
    mail("localbody@gmail.com", $subject, $message);

    echo $name . " - " . $phone . " - " . $summa . " - " . $text . " - " . $subject ;
?>