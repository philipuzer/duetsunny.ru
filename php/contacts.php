<?php
if (array_key_exists('user_phone', $_POST)) {
   $to = 'philip.malko@gmail.com';
   $subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Имя: ".$_POST['user_name']."\nТелефон: ".$_POST['user_phone']."\nIP: ".$_SERVER['REMOTE_ADDR'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);
   echo $_POST['user_name'];
}
?>