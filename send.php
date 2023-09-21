<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "h6478860144:AAHGTczeyQ-u6s9sRCoj2st3YOw9uH5yrB4";

//Сюда вставляем chat_id
$chat_id = "-1001807726577";

//Определяем переменные для передачи данных из нашей формы
if ($_POST['act'] == 'order') {
    $name = ($_POST['name']);
    $adress = ($_POST['address_line1']);
    $phone = ($_POST['message']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $name,
        'Адреса доставки:' => $adress,
        'Номер телефону:' => $phone,
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "".$key." ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Выводим сообщение об успешной отправке
    if ($sendToTelegram) {
        alert('Все ок погнали');
    }

//А здесь сообщение об ошибке при отправке
    else {
        alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
    }
}

?>