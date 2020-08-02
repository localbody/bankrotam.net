<?php

    $subject = "Обратная связь с BANKROTAM.NET";

    $name   = "Имя: "; 
    $name   .= htmlspecialchars( (isset($_POST["name"]) && !empty($_POST["name"])) ? $_POST["name"] : "Без имени" );
    $phone  = "Телефон: ";
    $phone  .= htmlspecialchars( (isset($_POST["phone"]) && !empty($_POST["phone"])) ? $_POST["phone"] : "Без телефона" );
    $summa  = "Сумма долга: ";
    $summa  .= htmlspecialchars( (isset($_POST["summa"]) && !empty($_POST["summa"])) ? $_POST["summa"] : "Сумма не указана" );
    $text   = "Сообщение: ";
    $text   .= htmlspecialchars( (isset($_POST["text"]) && !empty($_POST["text"])) ? $_POST["text"] : "Без текста" );
    
    // Сообщение
    $message = "$name\r\n$phone\r\n$summa\r\n$text";
    // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
    // $message = wordwrap($message, 70, "\r\n");

    // Отправляем
    // mail("noreply@bankrotam.net", $subject, $message);
    mail("info@bankrotam.net", $subject, $message);
    mail("localbody@gmail.com", $subject, $message);
?>