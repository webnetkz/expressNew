<?php

$errorMassage;
$token;

$data = file_get_contents('php://input');

if(!empty($data)) {
    $data = json_decode($data);
    // Проверяем если данные в запросе
    if(!empty($data->Login) && !empty($data->Password)) {

        // Подключаемся к DB
        require_once 'db.php';

        // Проверяем логин
        $sqlData = 'SELECT `login`, `pass`, `token` FROM api_users WHERE `login` = "'.$data->Login.'";';
        $resData = $pdo->query($sqlData);
        $resData = $resData->fetch(PDO::FETCH_ASSOC);

        if($resData) {
            
            // Проверяем пароль
            $sqlPass = 'SELECT `pass` FROM api_users WHERE `pass` = "'.$data->Password.'";';
            $resPass = $pdo->query($sqlPass);
            $resPass = $resPass->fetch(PDO::FETCH_ASSOC);

            if($resPass) {

                // Если все хорошо, выдаем токен
                $token = '{"Token":"'.$resData['token'].'"}';
            } else {
                // Ошибка при не верном пароле
                $errorMassage = '{"ErrorMassage":"Пароль не верный!"}';
            }

        } else {
            // Ошибка если логин не верный
            $errorMassage = '{"ErrorMassage":"Данные которые вы пытаетесь отправить неверные!"}';
        }

    } else {
        // Ошибка если логин или пароль не были отправлены
        $errorMassage = '{"ErrorMassage":"Логин или пароль не заполнены!"}';
    }

} else {
    $errorMassage = '{"ErrorMassage":"Вы используете не допустимый метод отправки данных!"}';
}

//Если есть ошибки отправляем JSON данные об ошибке
if(!empty($errorMassage)) {
    echo $errorMassage;
}
if(!empty($token)) {
    echo $token;
}