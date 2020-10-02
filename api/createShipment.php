<?php

$errorMassage;
$response;

### Получение всех заголовков ##########
$headers = apache_request_headers(); ###
########################################

$data = file_get_contents('php://input');
$data = json_decode($data);

if($headers['Content-Type'] !== 'application/json; charset=UTF-8') {
    echo '{"ErrorMassage":"Необходимо использовать JSON данные, в UTF-8 кодировке!"}';
}


if($headers['Authorization']) {
    require_once 'db.php';

    
    $sqlTokenName = 'SELECT `name`, `token` FROM api_users WHERE token = "'.$headers['Authorization'].'"';
    $resTokenName = $pdo->query($sqlTokenName);
    $resTokenName = $resTokenName->fetch(PDO::FETCH_ASSOC);
    
    if($resTokenName['name']) {
        
        // Проверяем если данные в запросе
        if(!empty($data->Country)
         && !empty($data->Weight)
          && !empty($data->BagWeight)
           && !empty($data->ReceiverFirstName)
            && !empty($data->ReceiverLastName)
             && !empty($data->ReceiverPostCode)
              && !empty($data->ReceiverPhoneNumber)
               && !empty($data->ReceiverDistrict)
                && !empty($data->ReceiverRegion)
                 && !empty($data->ReceiverCity)
                  && !empty($data->ReceiverAddress)
                   && !empty($data->Description)
                    && !empty($data->TypeOfItems)
                     && !empty($data->SenderFirstName)
                      && !empty($data->SenderLastName)
                       && !empty($data->SenderPostCode)
                        && !empty($data->SenderPhoneNumber)
                         && !empty($data->SenderDistrict)
                          && !empty($data->SenderRegion)
                           && !empty($data->SenderCity)
                            && !empty($data->SenderAddress)
                             && !empty($data->CreateDate)
                              && !empty($data->Currency)
                               && !empty($data->Value)) {
                                   // Если все данные есть добовляем их в базу данных
                                   $sqlCreateShipment = 'INSERT INTO api_'.lcfirst($resTokenName['name']).'(Country,Weight,BagWeight, ReceiverFirstName,ReceiverLastName,ReceiverPostCode,ReceiverPhoneNumber,ReceiverDistrict,ReceiverRegion, ReceiverCity,ReceiverAddress,Description, TypeOfItems, SenderFirstName, SenderLastName, SenderPostCode,SenderPhoneNumber,SenderDistrict,SenderRegion,SenderCity, SenderAddress,CreateDate,Currency,Value) VALUES("'.$data->Country.'", ';
                                   $sqlCreateShipment .= '"'.$data->Weight.'", "'.$data->BagWeight.'", "'.$data->ReceiverFirstName.'", "'.$data->ReceiverLastName.'", ';
                                   $sqlCreateShipment .= '"'.$data->ReceiverPostCode.'", "'.$data->ReceiverPhoneNumber.'", "'.$data->ReceiverDistrict.'", "'.$data->ReceiverRegion.'", ';   
                                   $sqlCreateShipment .= '"'.$data->ReceiverCity.'", "'.$data->ReceiverAddress.'", "'.$data->Description.'", "'.$data->TypeOfItems.'", "'.$data->SenderFirstName.'", ';    
                                   $sqlCreateShipment .= '"'.$data->SenderLastName.'", "'.$data->SenderPostCode.'", "'.$data->SenderPhoneNumber.'", "'.$data->SenderDistrict.'", "'.$data->SenderRegion.'", ';
                                   $sqlCreateShipment .= '"'.$data->SenderCity.'", "'.$data->SenderAddress.'", "'.$data->CreateDate.'", "'.$data->Currency.'", "'.$data->Value.'");';   


                                    $res = $pdo->query($sqlCreateShipment);

                                    if($res) {
                                        $response = '{"Success":"Create Shipment"}';
                                    } else {
                                        $errorMassage = '{"ErrorMassage":"Произошла ошибка при добавлении данных в базу 1700"}';
                                    }

        } else {
            $errorMassage = '{"ErrorMassage":"Отправлены не все необходимые данные 3227"}';
        }

    } else {
        $errorMassage = '{"ErrorMassage":"Неверный токен 3226"}';
    }

} else {
    $errorMassage = '{"ErrorMassage":"Отсутствует заголовок Authorization 3225"}';
}



//Если есть ошибки отправляем JSON данные об ошибке
if(!empty($errorMassage)) {
    echo $errorMassage;
}
if(!empty($response)) {
    echo $response;
}