<?php

$recepient = "ilovedance44@ya.ru";
$sitename = "ялюблю.танцывкостроме.рф";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$age = trim($_POST["age"]);
$smena = trim($_POST["smena"]);
$code = trim($_POST["code"]);
$from = trim($_POST["from"]);
$precast = trim($_POST["precast"]);
$message = "$from \nИмя: $name \nТелефон: $phone \nВозраст: $age \n Записать в группу подготовки: $precast\nСмена: $smena  \nПРОМОКОД: $code"; 

$pagetitle = "Заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");