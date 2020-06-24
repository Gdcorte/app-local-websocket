<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> CHECKOUT 2.0 - DEV VERSION</h1>

    <label for="customMessage"> Place your message here!</label>
    <input id="customMessage" type="text">
    <button onclick="callListener()"> Call Local Listener</button>

</body>

<script>

    async function callListener(){
        var message = document.getElementById('customMessage').value

        var clientUrl = "ws://127.0.0.1:8765"

        var webSocket = new WebSocket(clientUrl);
        
        webSocket.onmessage = function(msg){
            console.log(msg['data'])
            alert('The server says: ' + msg['data']);
        }

        webSocket.onopen = () => webSocket.send(message)

        

        console.log("I WILL CAL THE LISTENER, HANG ON M8!")
    }

</script>

</html>