<?php
//Принимаем постовые данные
$user=$_POST['user-name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
//Тут указываем на какой ящик посылать письмо
$to = "aleksio2011@gmail.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
User name: ".htmlspecialchars($user)."<br />
Email: ".htmlspecialchars($email). " <br />
Password: ".htmlspecialchars($pass);
// Отправляем письмо при помощи функции mail();
$headers = "From: homework18.sl <mail@homework18.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>