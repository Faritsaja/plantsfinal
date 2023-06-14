var mqtt = require('mqtt')
var client = mqtt.connect('http://test.mosquitto.org')
var mysql = require('mysql');
var connection = mysql.createConnection({
	host : 'localhost',
	user : 'root',
	password : '',
	database : 'iot2'
});
const TelegramBot = require('node-telegram-bot-api');
const token = '6200194903:AAFL6X1clXNZgS-dJp4JbyBzqNmt4jPk3PQ'; // Ganti dengan token bot Anda
const bot = new TelegramBot(token, {polling: true});

var data1;
var data2; //variabel gae simpan data ke database
var data3;
var data4; 
var data5; //variabel buat ambil data dari database
var data6; //buat tembak
var data7; //variabel buat ambil data dari database 2
var data8; //buat tembak 2
let notifikasiTerikirim = false;
let notifikasireset=true;
let notifikasiTerikirim2 = false;
let notifikasireset2=true;

var user=[1145707963,608820178,1417650050];
//pastinya ketika var data2 sama  var data5 maka tidak akan dijalankan perintah kirim notif 
// ledState();
// if(data2 ==='28'){
//   bot.sendMessage(1145707963, 'Halo, ini adalah pesan dari bot Telegram!');

// }

connection.connect();

client.on('connect', function(){
	client.subscribe('nodejs123/hum',function(err){
    })
  client.subscribe('nodejs123/temp',function(err){
    })
  client.subscribe('nodejs123/ldr',function(err){
    })
  client.subscribe('nodejs123/tds',function(err){
    })
})



client.on ('message',function (topic, payload) {
  // const timestamp = new Date().getTime();
  connection.query('SELECT suhu FROM tabel_iot ORDER BY id DESC LIMIT 1', (error, results) => {
    if (error) {
      console.error('Error saat mengambil data: ' + error.stack);
      return;
    }
    results.forEach((row) => {
      // console.log(JSON.stringify(Object.values(row)));
      data5 = JSON.stringify(Object.values(row));
    });
    data6 = parseInt(data5.match(/\d+/)[0]);

  });
  connection.query('SELECT tds FROM tabel_iot ORDER BY id DESC LIMIT 1', (error, results) => {
    if (error) {
      console.error('Error saat mengambil data: ' + error.stack);
      return;
    }
    results.forEach((row) => {
      // console.log(JSON.stringify(Object.values(row)));
      data7 = JSON.stringify(Object.values(row));
    });
    data8 = parseInt(data7.match(/\d+/)[0]);

  });
  console.log(getCurrentTime());

  if (topic === 'nodejs123/hum') {
        data1 = payload;
      }
    
      if (topic === 'nodejs123/temp') {
        data2 = payload.toString();
        // console.log("data2",data2.toString());   
        if(data2 != data6){
         
          //  console.log("baru", data2);
          // console.log("baru2", data6);
          // console.log("baru3", payload.toString);

          //  console.log(JSON.stringify(Object.values(baru2)));

            if(data2>28 && !notifikasiTerikirim){
          bot.sendMessage(user[0], '‼️SUHU PANAS‼️'+ ' Suhu Ruangan Saat ini '+ data2 +' °C');
          bot.sendMessage(user[1], '‼️SUHU PANAS‼️'+ ' Suhu Ruangan Saat ini '+ data2 +' °C');
          bot.sendMessage(user[2], '‼️SUHU PANAS‼️'+ ' Suhu Ruangan Saat ini '+ data2 +' °C');
          notifikasiTerikirim = true;
          notifikasireset=false;
          // setTimeout(function() {
          //   bot.sendMessage(1145707963, 'Halo, ini adalah pesan dari bot Telegram yang dikirim setelah 1 menit!');
          // }, 5000);
        }if (data2<=28 && !notifikasireset){
          bot.sendMessage(user[0], '✅Suhu Normal✅'+ ' Suhu Ruangan Saat ini '+ data2 +' °C');
          bot.sendMessage(user[2], '✅Suhu Normal✅'+ ' Suhu Ruangan Saat ini '+ data2 +' °C');
          bot.sendMessage(user[2], '✅Suhu Normal✅'+ ' Suhu Ruangan Saat ini '+ data2 +' °C');
          notifikasiTerikirim = false;
          notifikasireset=true;
        }
        }
      }
      if (topic === 'nodejs123/tds') {
        data3 = payload;
        if(data3 != data8){
          //  console.log("baru", baru);
          // console.log("baru2", data6);

          //  console.log(JSON.stringify(Object.values(baru2)));

            if(data3<700 && !notifikasiTerikirim2){
          bot.sendMessage(user[0], '‼️Nutrisi Kurang‼️'+ ' Nutrisi saat ini '+ data3 +' PPM');
          bot.sendMessage(user[1], '‼️Nutrisi Kurang‼️'+ ' Nutrisi saat ini '+ data3 +' PPM');
          bot.sendMessage(user[2], '‼️Nutrisi Kurang‼️'+ ' Nutrisi saat ini '+ data3 +' PPM');
          notifikasiTerikirim2 = true;
          notifikasireset2=false;
          // setTimeout(function() {
          //   bot.sendMessage(1145707963, 'Halo, ini adalah pesan dari bot Telegram yang dikirim setelah 1 menit!');
          // }, 5000);
        }if (data3>=700 && !notifikasireset2){
          bot.sendMessage(user[0], '✅Nutrisi Normal✅' + 'Nutrisi Saat ini '+ data3 +' PPM');
          bot.sendMessage(user[1], '✅Nutrisi Normal✅' + 'Nutrisi Saat ini '+ data3 +' PPM');
          bot.sendMessage(user[2], '✅Nutrisi Normal✅' + 'Nutrisi Saat ini '+ data3 +' PPM');
          notifikasiTerikirim2 = false;
          notifikasireset2=true;
        }
        }
        
      }
      if (topic === 'nodejs123/ldr') {
        data4 = payload;
        
      }

      
// message is BufferT
//INSERT INTO `data` (`no`, `data`, `data2`, `date`) VALUES (NULL, '2', '2', current_timestamp());
console.log('Received Message:', topic,payload.toString())
// console.log("time",timestamp);
//connection.query('INSERT INTO tabel_iot (`id`, `waktu`, `kelembapan`, `suhu`, `tds`, `ldr`) VALUES(NULL,"' + data1 + '","' + data2 +'", current_timestamp())' , function (error, results, fields) {
connection.query('INSERT INTO tabel_iot (`id`, `waktu`, `kelembapan`, `suhu`, `tds`, `ldr`) VALUES(NULL, current_timestamp(),"' + data1 + '","' + data2 + '","' + data3 + '","' + data4 +'")' , function (error, results, fields) {
  //  if (error) throw error;
   // console,log('ok');
  });

})

function getCurrentTime() {
  const date = new Date();
  const hours = date.getHours();
  const minutes = date.getMinutes();
  const seconds = date.getSeconds();

  // Menambahkan angka 0 di depan angka satu digit
  const formattedHours = hours < 10 ? `0${hours}` : hours;
  const formattedMinutes = minutes < 10 ? `0${minutes}` : minutes;
  const formattedSeconds = seconds < 10 ? `0${seconds}` : seconds;

  const currentTime = `${formattedHours}:${formattedMinutes}:${formattedSeconds}`;
  return currentTime;
}

