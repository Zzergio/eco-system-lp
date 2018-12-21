<?php

$name=$_POST['user-name'];
$phone=$_POST['user-phone'];
$email=$_POST['user-email'];
$to = "s.rieznyk@gmail.com, info@system-eco.ru";

$subject = "Заявка Eco System LP";

$message = "
<p>Пришла заявка с сайта</p>
<strong>Name:</strong> ".htmlspecialchars($name)."<br /><br />
<strong>Email:</strong> ".htmlspecialchars($email)." <br /><br />
<strong>Phone:</strong> ".htmlspecialchars($phone);

// Отправляем письмо при помощи функции mail();

$headers = "Content-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('\n\n Спасибо! Ваша заявка получена и будет обработана в ближайшее время');
        window.location = 'index.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Произошла ошибка, попробуйте позже.');
        window.location = 'index.html';
    </script>
<?php
}
?>