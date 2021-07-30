import { useState } from 'react';
import './App.css';

const App = () => {
  const [message, setmessage] = useState("")

  function callListener(){
    console.log(message)

    var clientUrl = "ws://localhost:8000"

    var webSocket = new WebSocket(clientUrl);
    
    webSocket.onmessage = function(msg){
        console.log(msg['data'])
        alert('The server says: ' + msg['data']);
    }

    console.log("I WILL CAL THE LISTENER, HANG ON M8!")
    webSocket.onopen = () => webSocket.send(message)

  }

  function handleInputChange(event:any){
    setmessage(event.target.value)
  }

  return (
    <div className="App">
      <h1> REALLY SIMPLE Direct WebSocket communication (Front-end)</h1>

      <label> Place your message here!</label>
      <input value={message} onChange={handleInputChange} type="text" />
      <button onClick={callListener}> Call Local Listener</button>

    </div>
  );
}

export default App;
