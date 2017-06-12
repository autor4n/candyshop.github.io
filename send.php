<meta http-equiv="Content-Type" content="text/html charset=utf-8" />
<?php
if ($_POST['submit']) {
        $name = substr(htmlspecialchars(trim($_POST['name'])), 0, 200);
        $phone =  substr(htmlspecialchars(trim($_POST['phone'])), 0, 50);
        $email = substr(htmlspecialchars(trim(array('email'))), 0, 50);
        $from ='es.spb@alterainvest.ru';
  // $to - кому отправляем
        $to = 'es.spb@alterainvest.ru';
        // функция, которая отправляет наше письмо
        mail("es.spb@alterainvest.ru", "Связаться", "Имя : $_POST[name]\nТелефонный номер : $_POST[phone]\nE-mail: $_POST[email]");
}

else{
$name = substr(htmlspecialchars(trim(array('name'))), 0, 200);
$phone = substr(htmlspecialchars(trim(array('phone'))), 0, 50);
$email = substr(htmlspecialchars(trim(array('email'))), 0, 50);
// $to - кому отправляем
$to = 'es.spb@alterainvest.ru';
// функция, которая отправляет наше письмо
mail("es.spb@alterainvest.ru", "Связаться", "Имя : $_POST[name]\nТелефонный номер : $_POST[phone]\nE-mail: $_POST[email]");
}
?>
