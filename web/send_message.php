<?php // Проверяем как обратились к этому обработчику. Обязательная проверка!
 if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Стандартная функция отправки e-mail.
    function send_mail($from,$to,$subject,$body)
{
    $charset = 'utf-8';
    mb_language("ru");
    $headers  = "MIME-Version: 1.0 \n" ;
    $headers .= "From: <".$from."> \n";
    $headers .= "Reply-To: <".$from."> \n";
    $headers .= "Content-Type: text/html; charset=$charset \n";     
    //$subject = '=?'.$charset.'?B?'.base64_encode($subject).'?=';
    $subject = "Сообщение с сайта";
    mail($to,$subject,$body,$headers);
}
 
    $name = $_POST["name"];; //'От Васи!';
    $email = $_POST["email"]; // Принимаем e-mail который нам отправил Ajax.
    $subject = "Сообщение с сайта"; //"Тест";
    $text = $_POST["message"]; //'Привет! :)'; 
    
    // Проверяем правильность ввода e-mail. Стандартная проверка с помощью регулярных выражений. 
if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i",trim($email)))
 {
                     send_mail($email, // Указываем от кого e-mail.
                               'market@iron-systems.ru', // На этот e-mail придёт письмо.
                               $subject, // Тема письма.
                               '<strong>'.$name.'</strong><br><br>'.$text); // Формируем само письмо. <br> - Тег переноса строки. 
     
     
                     echo 'E-mail отправлен!'; // Отвечаем Аяксу, что всё нормально.    
 }else
 {
   echo 'Некорректный E-mail!'; 
 }
 
}
else
{
    header("Location: http://certus-market.ru");
}
?>