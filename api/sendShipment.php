<html>
<head><title>CreateShipment</title></head>
<body>
    <button onclick="submitform()">Test</button>
    </form>
    <script>
        function submitform(){
            let xhr = new XMLHttpRequest();
            xhr.open("POST","/api/createShipment.php");
            xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            xhr.setRequestHeader('Authorization', 'd3GER43hog083gfdeDE4dEk4W');
            let str = {
                "Country":"US",
                "Weight":"1.23",
                "BagWeight":"3.12",
                "ReceiverFirstName":"Your name",
                "ReceiverLastName":"<Your last name",
                "ReceiverPostCode":"123123",
                "ReceiverPhoneNumber":"Your phone number",
                "ReceiverDistrict":"Your district",
                "ReceiverRegion":"Your region",
                "ReceiverCity":"Your city",
                "ReceiverAddress":"Your address",
                "Description":"description",
                "TypeOfItems":"type of items",
                "SenderFirstName":"name", 
                "SenderLastName":"last name",
                "SenderPostCode":"123123",
                "SenderPhoneNumber":"phone number",
                "SenderDistrict":"district",
                "SenderRegion":"region",
                "SenderCity":"city",
                "SenderAddress":"address",
                "CreateDate":"dd.mm.yyyy-hh.mm",
  	            "Currency":"USD",
 	            "Value":"5"   
            };
            xhr.responseType = 'json';
            xhr.send(JSON.stringify(str));
            xhr.onload = () => console.log(xhr.response);
        }
    </script>
</body>
