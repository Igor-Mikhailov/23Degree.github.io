$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$fio = urldecode($fio);
$email = urldecode($email);
$phone = urldecode($phone);
$fio = trim($fio);
$email = trim($email);
$phone = trim($phone);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("yamahagt3245@mail.ru", "Заявка с сайта", "ФИО:".$fio.". "телефон:".$fio.".E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>