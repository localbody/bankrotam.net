<?php

    $subject = "Обратная связь с BANKROTAM.NET";

    $name   = "Имя: " . isset($_GET["name"]) ? $_GET["name"] : "Без имени";
    $phone  = "Телефон: " . isset($_GET["phone"]) ? $_GET["phone"] : "Без телефона";
    $summa  = "Сумма: " . isset($_GET["summa"]) ? $_GET["summa"] : "Сумма не указана";
    
    // Сообщение
    $message = "$name\r\n$phone\r\n$summa";
    // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
    $message = wordwrap($message, 70, "\r\n");

    // Отправляем
    mail("localbody@gmail.com", $subject, $message);
?>