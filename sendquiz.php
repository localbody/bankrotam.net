<?php

    $subject = "Тест с BANKROTAM.NET";

    $message   = isset($_POST["message"]) ? $_POST["message"] : "Пусто...";
    
    // Сообщение
    // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
    // $message = wordwrap($message, 70, "\r\n");

    // Отправляем
    mail("noreply@bankrotam.net", $subject, $message, "Content-type:text/plain; charset = UTF-8\r\nFrom:feedback@bankrotam.net");
    // mail("localbody@yandex.ru", $subject, $message, "Content-type:text/plain; charset = UTF-8\r\nFrom:feedback@bankrotam.net");
?>