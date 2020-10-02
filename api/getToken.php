<?php

$errorMassage;
$token;

### Получение всех заголовков ##########
$headers = apache_request_headers(); ###
########################################

if($headers['Content-Type'] !== 'application/json; charset=UTF-8') {
    echo '{"ErrorMassage":"Необходимо использовать JSON данные, в UTF-8 кодировке 8877"}';
}

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
                $errorMassage = '{"ErrorMassage":"Пароль не верный 3224"}';
            }

        } else {
            // Ошибка если логин не верный
            $errorMassage = '{"ErrorMassage":"Данные которые вы пытаетесь отправить неверные 3223"}';
        }

    } else {
        // Ошибка если логин или пароль не были отправлены
        $errorMassage = '{"ErrorMassage":"Логин или пароль не заполнены 3222"}';
    }

} else {
    $errorMassage = '{"ErrorMassage":"Вы отправили пустой объект данных 3221"}';
}

//Если есть ошибки отправляем JSON данные об ошибке
if(!empty($errorMassage)) {
    echo $errorMassage;
}
if(!empty($token)) {
    echo $token;
}