<?php

$name=$_POST['user-name'];
$phone=$_POST['user-phone'];
$email=$_POST['user-email'];
$to = "s.rieznyk@gmail.com";

$subject = "Заявка Eco System LP";

$message = "
<p>Пришла заявка с сайта</p>
<strong>Name:</strong> ".htmlspecialchars($name)."<br /><br />
<strong>Email:</strong> ".htmlspecialchars($email)." <br /><br />
<strong>Phone:</strong> ".htmlspecialchars($phone);

// Отправляем письмо при помощи функции mail();

$headers = "Content-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);

header('Location: thanks.html');
exit();

?>