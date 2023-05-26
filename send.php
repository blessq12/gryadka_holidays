<?php
// Telegram data
$token = '1773023736:AAFXTsMDUH-2HdiWfe5qHUfUFeyEtfejPmM';
$recipient = '1815974380';

if (!empty($_POST)){
    extract($_POST);
    $mailtelegram = urlencode("Имя родителя: {$name}\nНомер телефона: {$phone}\nТарифный план:{$tarif}");
    $send = file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$recipient&text=$mailtelegram");
       if ($send){
            header('Location:' . $_SERVER['HTTP_REFERER'].'?answer=true');
       } else {
            header('Location:' . $_SERVER['HTTP_REFERER'].'?answer=fasle');
       }
} else {
    echo 'Нет данных для отправки';
}
