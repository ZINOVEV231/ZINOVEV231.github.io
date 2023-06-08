<?php
     //получение данных с формы---//

$user_name=$_POST['user_name'];
$fam_name=$_POST['fam_name'];
$mail_name=$_POST['mail_name'];
$sob_name=$_POST['sob_name'];

    //обработаем полученные данные

$user_name=htmlspecialchars($user_name); //преобразование символов в сущности
$fam_name=htmlspecialchars($fam_name);
$mail_name=htmlspecialchars($mail_name);
$sob_name=htmlspecialchars($sob_name);


$user_name=urldecode($user_name);  //декодирование URL
$fam_name=urldecode($fam_name);
$mail_name=urldecode($mail_name);
$sob_name=urldecode($sob_name);


$user_name=trim($user_name); //удаление пробельных сиволов с оьеих сторон
$fam_name=trim($fam_name);
$mail_name=trim($mail_name);
$sob_name=trim($sob_name);



//отправляем данных на почту

if(mail("zinovev.99@mail.ru",
          "Письмо с сайта",
          "Имя: ".$user_name."\n".
		  "Фамилия: ".$fam_name."\n".
		  "Email: ".$mail_name."\n".
		  "Сообщение: ".$sob_name."\n".
		  "From: no-reply@mydomain.ru \r\n")
		  ){
			  echo('Письмо отправлено');
		  }
		  else{
			  echo('Есть ошибки');
		  }

?>