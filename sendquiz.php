<?php

    $subject = "Тест с BANKROTAM.NET";

    $message   = isset($_GET["message"]) ? $_GET["message"] : "Пусто...";
    
    // Сообщение
    // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
    // $message = wordwrap($message, 70, "\r\n");

    // Отправляем
    // mail("noreply@bankrotam.net", $subject, $message);
    mail("localbody@gmail.com", $subject, $message);
?>