<?php 
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "8014620879:AAGDkn5AyhqN3IdVHzhhhoMtgFqaRUuc04w";
$chat_id = "-4575687290";

fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$user_name}");

echo "Привет, " . $user_name . "<br>";
echo "Ваш Телефон: <b> " . $user_phone . "</b>";