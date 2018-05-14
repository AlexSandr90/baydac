<?php

  // Принимаем данные из формы в виде массивов
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  // Преобразовываем все символы, которые пользователь попытается добавить в форму
  $name = htmlspecialchars($name);
  $email = htmlspecialchars($email);
  $message = htmlspecialchars($message);
  //  Декодируем url, если пользователь попытается его добавить в форму
  $name = urldecode($name);
  $email = urldecode($email);
  $message = urldecode($message);
  // Удаляем пробелы с начала и конца строки, если таковые имеются
  $name = trim($name);
  $email = trim($email);
  $message = trim($message);
  // url, на который возвращаемся после отправки данных формы
  $backurl="http://portfolio/";

  if (mail("gayrsuk@gmail.com", "Заказ с сайта", "Имя:".$name.". E-mail: ".$email , ". Сообщение: ".$message ,"From: example2@mail.ru \r\n"))
  { 
    echo "Cобщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу..."; 
  } else { 
    echo "При отправке сообщения возникли ошибки"; 
  }
  // Возвращаемся на нашу страницу
  print "<script language='Javascript'><!-- 
  function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000); 
  //--></script>"


// AJAX

  // if( isset( $_POST['name'] ) && isset( $_POST['email'] ) && isset( $_POST['message'] ) )
  // {
  //   // Формируем массив для JSON ответа
  //   $result = array(
  //     'name' => $_POST['name'],
  //     'email' => $_POST['email'],
  //     'message' => $_POST['message']
  //   );
  //   // Переводим массив в JSON
  //   echo json_encode($result);
  // }
?> 

