<meta http-equiv="Content-Type" content="text/html charset=utf-8" />
<?php
if ($_POST['submit']) {
        $phone =  substr(htmlspecialchars(trim($_POST['phone'])), 0, 50);
        $from ='es.spb@alterainvest.ru';
  // $to - кому отправляем
        $to = 'es.spb@alterainvest.ru';
        // функция, которая отправляет наше письмо
        mail("es.spb@alterainvest.ru", "Связаться", "Телефонный номер : $_POST[phone]");
}

else{
$phone = substr(htmlspecialchars(trim(array('phone'))), 0, 50);
// $to - кому отправляем
$to = 'es.spb@alterainvest.ru';
// функция, которая отправляет наше письмо
mail("es.spb@alterainvest.ru", "Связаться", "Телефонный номер : $_POST[phone]");
}
?>
