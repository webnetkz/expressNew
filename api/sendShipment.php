<html>
<head><title>test</title></head>
<body>
        <input value="Submit" type="submit" onclick="submitform()">
    </form>
    <script>
        function submitform(){
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'createShipment.php');
            xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            var j = {
	            "Token":"<уникальный токен(25 символов)>"
            //     "Country":"FR",
            //     "Weight":"<вес посылки(разделитель точка)>",
            //     "BagWeight":"<вес мешка(разделитель точка)>",
            //     "ReceiverFirstName":"<имя получателя(50 символов)>",
            //     "ReceiverLastName":"<фамилия получателя(50 символов)>",
            //     "ReceiverPostCode":"<почтовый индекс получателя(10 символов)>",
            //     "ReceiverPhoneNumber":"<телефонный номер получателя(30 символов)>",
            //     "ReceiverDistrict":"<район получателя (255 символов)>",
            //     "ReceiverRegion":"<регион получателя(255 символов)>",
            //     "ReceiverCity":"<город получателя(255 символов)>",
            //     "ReceiverAddress":"<адрес получателя(255 символов)>",
            //     "Description":"<описание отправления(255 символов)>",
            //     "TypeOfItems":"<описания вложения(255 символов)>",
            //     "SenderFirstName":"<имя отправителя(50 символов)>", 
            //     "SenderLastName":"<фамилия отправителя(50 символов)>",
            //     "SenderPostCode":"<почтовый индекс отправителя(10 символов)>",
            //     "SenderPhoneNumber":"<телефонный номер отправителя(30 символов)>",
            //     "SenderDistrict":"<район отправителя(255 символов)>",
            //     "SenderRegion":"<регион отправителя(255 символов)>",
            //     "SenderCity":"<город отправителя(255 символов)>",
            //     "SenderAddress":"<адрес отправителя(255 символов)>",
            //     "CreateDate":"<дата создания отправления в формате(dd.mm.yyyy-hh.mm)>",
  	        //     "Currency":"USD",
 	        //     "Value":"<ценность посылки USD>"
            };
            xhr.responseType = 'json';
            xhr.send(JSON.stringify(j));
            xhr.onload = function() {
                let responseObj = xhr.response;
                console.log(responseObj);
            };
        }
    </script>
</body>
</html>