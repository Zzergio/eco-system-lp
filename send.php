<?php

$name=$_POST['user-name'];
$phone=$_POST['user-phone']
$email=$_POST['user-email'];
$to = "s.rieznyk@gmail.com";

$subject = "From Eco System LP";

$message = "

<strong>Name:</strong> ".htmlspecialchars($name)."<br /><br />
<strong>Email:</strong> <a href='mailto:$email'>".htmlspecialchars($email)."</a> <br /><br />
<strong>Phone:</strong> ".htmlspecialchars($phone).;

// Отправляем письмо при помощи функции mail();
$headers = "From: Eco System\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);

// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks/');
exit();

?>