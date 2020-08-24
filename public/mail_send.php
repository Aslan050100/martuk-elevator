<?php
function sendmail($to, $subject, $content) {
    $headers = 'From: Elevatorgroup.kz <adilzhanboxing@gmail.com>'."\r\n".'Reply-To: 170107045@stu.sdu.edu.kz'."\r\n"."Content-Type: text/html; charset=UTF-8"."\r\n".'X-Mailer: PHP/'.phpversion();
    $success = mail($to, $subject, $content, $headers);
    if (!$success) {
        $errorMessage = error_get_last()['message'];
        echo $errorMessage;
    }
    if($success){
        return "Ваша заявка оставлена.";
    }else{
        return "Пожалуйста повторите попытку.";
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $has_email = true;
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $text = $_POST['text'];
    $_SERVER['REQUEST_METHOD'] = '';
    unset($_POST);
    $messag = sendmail("adilzhanboxing@gmail.com", "Новый клиент Elevatorgroup.kz", " Имя : $name \n Тел :$tel \n Коммент: $text");
}

?>
