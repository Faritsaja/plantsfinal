const mqtt = require('mqtt')
const host = 'test.mosquitto.org'
const port = '1883'
const clientId = `mqtt_${Math.random().toString(16).slice(3)}`
const connectUrl = `http://${host}:${port}`

const client = mqtt.connect(connectUrl, {
  clientId,
  clean: true,
  connectTimeout: 4000,
  //username: 'emqx',
  //password: 'public',
  reconnectPeriod: 1000,
})

const topic = 'nodejs123/mqtt'
const topic2 = 'nodejs123/mqtt2'
/**client.on('connect', () => {
  console.log('Connected')
    client.subscribe([topic], () => {
        console.log(`Subscribe to topic '${topic}'`)
                    });
           
})
client.on('connect', () => {
  console.log('Connected')
    client.subscribe([topic2], () => {
        console.log(`Subscribe to topic '${topic2}'`)
                    });
    
})
client.on('message', (topic, payload) => {
    console.log('Received Message:', topic, payload.toString())
  })
client.on('message', (topic2, payload) => {
    console.log('Received Message:', topic2, payload.toString())
  })
**/
client.on('connect', () => {
  console.log('Connected')
    client.subscribe(topic);
    client.subscribe(topic2);
           
})
client.on('message', function (topic, payload) {
  // message is Buffer
  console.log('Received Message:', topic, payload.toString())
  
})
/**client.on('message', function (topic2, payload) {
  // message is Buffer
  console.log('Received Message:', topic2, payload.toString())
  
})
**/