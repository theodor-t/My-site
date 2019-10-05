<?php
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$name = urldecode($name);
$age = urldecode($age);
$email = urldecode($email);
$phone = urldecode($phone);
$name = trim($name);
$age = trim($age);
$email = trim($email);
$phone = trim($phone);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("sampjohn.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email ,"From: sampjohn1@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>