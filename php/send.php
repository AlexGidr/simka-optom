<?php
$fio = $_POST['fio'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$tel = urldecode($tel);
$email = urldecode($email);
$fio = trim($fio);
$tel = trim($tel);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("alexpestyshev@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: https://alexgidr.github.io/mobile-repair/# \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>