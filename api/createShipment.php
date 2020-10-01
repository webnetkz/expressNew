<?php

$errorMassage;


# Получить JSON как строку
$json_str = file_get_contents('php://input');
$x = '{"s":"sdf"}';
$x = json_decode($x);
$x = json_encode($x);
print($json_str);
// // Проверяем не пуст ли POST
// if(!empty($_POST)) {
//     var_dump($_POST);
//     exit();
//     $data = $_POST;
//     // Принимаем полученые данные
//     //$data = json_encode($_POST);
//     //$data = json_decode($data);



//     // Проверяем если данные в запросе
//     if(!empty($data->token)) {

//         // Подключаемся к DB
//         require_once 'db.php';
//         // Проверяем токен
//         $sqlToken = 'SELECT `token` FROM api_users WHERE `token` = "'.$data->token.'";';
//         $resToken = $pdo->query($sqlToken);
//         $resToken = $resToken->fetch(PDO::FETCH_ASSOC);

//         // Если токен действительный
//         if($resToken) {
            
//             // Проверяем пароль
//             $sqlPass = 'SELECT `pass` FROM api_users WHERE `pass` = "'.$data->pass.'";';
//             $resPass = $pdo->query($sqlPass);
//             $resPass = $resPass->fetch(PDO::FETCH_ASSOC);


//         } else {
//             // Ошибка если токент не верный
//             $errorMassage = '{"ErrorMassage":"Токент который вы передаете, нерабочий!"}';
//         }

//     } else {
//         // Ошибка если логин или пароль не были отправлены
//         $errorMassage = '{"ErrorMassage":"Поле с данными Токена отсутствуют!"}';
//     }

// } else {
//     // Ошибка если данные не в POST
//     $errorMassage = '{"ErrorMassage":"Вы используете не допустимый метод отправки данных!"}';
// }

// // Если есть ошибки отправляем JSON данные об ошибке
// if(!empty($errorMassage)) {
//     //$errorMassage = json_encode($errorMassage);
//     $dataJSON = $errorMassage;
//     echo $dataJSON;
// }
