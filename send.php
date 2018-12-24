<?php

$name=$_POST['user-name'];
$phone=$_POST['user-phone'];
$email=$_POST['user-email'];
$to = "s.rieznyk@gmail.com, info@system-eco.ru";

$subject = "Request from Eco System LP";

$message = "
<p>New request came from the site</p>
<strong>Name:</strong> ".htmlspecialchars($name)."<br /><br />
<strong>Email:</strong> ".htmlspecialchars($email)." <br /><br />
<strong>Phone:</strong> ".htmlspecialchars($phone);

// Отправляем письмо при помощи функции mail();

$headers = "Content-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('\n\n Thanks! Your request has been received and will be processed shortly.');
        window.location = 'index.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('An error has occurred, try again later.');
        window.location = 'index.html';
    </script>
<?php
}
?>