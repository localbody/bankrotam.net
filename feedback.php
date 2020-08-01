<?php

    $subject = "Обратная связь с BANKROTAM.NET";

    $name   = "Имя: " . isset($_GET["name"]) ? $_GET["name"] : "Без имени";
    $phone  = "Телефон: " . isset($_GET["phone"]) ? $_GET["phone"] : "Без телефона";
    $summa  = "Сумма долга: " . isset($_GET["summa"]) ? $_GET["summa"] : "Сумма не указана";
    $text   = "Сообщение: " . isset($_GET["text"]) ? $_GET["text"] : "Без текста";
    
    // Сообщение
    $message = "$name\r\n$phone\r\n$summa\r\n$text";
    // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
    $message = wordwrap($message, 70, "\r\n");

    // Отправляем
    mail("localbody@gmail.com", $subject, $message);

    echo $name . " - " . $phone . " - " . $summa . " - " . $text . " - " . $subject ;
?>