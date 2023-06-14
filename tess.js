clientID = "clientID = "+ parseInt(Math.random() * 100, 10);
// Create a client instance
// ############# ATTENTION: Enter Your MQTT TLS Port and host######## Supports only TLS Port
  client = new Paho.MQTT.Client("test.mosquitto.org", Number(8080), clientID);

// set callback handlers
client.onConnectionLost = onConnectionLost;
client.onMessageArrived = onMessageArrived;



//############# ATTENTION: Enter Your MQTT user and password details ########  
var options = {

  //  useSSL: true,
  // userName: "vzltapih",
  // password: "8UN9tiChH5CQ",
  onSuccess:onConnect
 // onFailure:doFail
}

// connect the client
client.connect(options);

// called when the client connects
function onConnect() {
  // Once a connection has been made, make a subscription and send a message.
  //console.log("onConnect");
  client.subscribe("mqtt/kipas");
  client.subscribe("mqtt/lampu");
  client.subscribe("mqtt/pompa");
  client.subscribe("mqtt/status");
  // message = new Paho.MQTT.Message("refresh1");
  // message.destinationName = "mqtt/kipas";
  // client.send(message);
  // message = new Paho.MQTT.Message("refresh2");
  // message.destinationName = "mqtt/lampu";
  // client.send(message);
  // message = new Paho.MQTT.Message("refresh3");
  // message.destinationName = "mqtt/pompa";
  // client.send(message);
}

function ledState(state) {
  if(state == 1) { message = new Paho.MQTT.Message("#on"); }
  if(state == 0) { message = new Paho.MQTT.Message("#off"); }
  message.destinationName = "mqtt/kipas";
  client.send(message);
}
function ledState2(state) {
  if(state == 1) { message = new Paho.MQTT.Message("#on2"); }
  if(state == 0) { message = new Paho.MQTT.Message("#off2"); }
  message.destinationName = "mqtt/lampu";
  client.send(message);
}
function ledState3(state) {
  if(state == 1) { message = new Paho.MQTT.Message("#on3"); }
  if(state == 0) { message = new Paho.MQTT.Message("#off3"); }
  message.destinationName = "mqtt/pompa";
  client.send(message);
}
function ledState4(state) {
  if(state == 1) { message = new Paho.MQTT.Message("manual"); }
  if(state == 0) { message = new Paho.MQTT.Message("otomatis"); }
  message.destinationName = "mqtt/status";
  client.send(message);
}

// called when the client loses its connection
function onConnectionLost(responseObject) {
  if (responseObject.errorCode !== 0) {
    console.log("onConnectionLost:"+responseObject.errorMessage);
  }
}

// called when a message arrives
function onMessageArrived(message) {
  console.log("onMessageArrived:"+message.payloadString);
  // Mendapatkan waktu saat ini
const currentTime = new Date();

// Mendapatkan komponen waktu (jam, menit, detik)
const hours = currentTime.getHours();
const minutes = currentTime.getMinutes();
const seconds = currentTime.getSeconds();

// Menampilkan waktu pada konsol
  console.log(`Waktu saat ini: ${hours}:${minutes}:${seconds}`);
}