<html>
<head><title>GetToken</title></head>
<body>
    <button onclick="submitform()">Test</button>
    </form>
    <script>
        function submitform(){
            let xhr = new XMLHttpRequest();
            xhr.open("POST","/api/getToken.php");
            xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            let str = {
	            "Login":"testLogin",
                "Password":"testPass"   
            };
            xhr.responseType = 'json';
            xhr.send(JSON.stringify(str));
            xhr.onload = () => console.log(xhr.response);
        }
    </script>
</body>
</html>