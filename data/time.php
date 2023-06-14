<!-- <?php
$connect = mysqli_connect('localhost', 'root', '', 'iot2');
//2022-12-22 2022-12-22
//start: 2010-04-10 12:30:00 end: 2010-04-10 12:30:50
//$sql2 = mysqli_query($connect, "SELECT * FROM tabel_iot where waktu between ' 23:00:00' and ' 23:58:59' order by id desc" );
//$data2= mysqli_fetch_array($sql2);
//while ($data2= mysqli_fetch_array($sql2)){
  
  //  echo $data2['suhu'];

//} 
$sql2 = mysqli_query($connect, "SELECT waktu FROM tabel_iot ORDER BY id DESC");
$data2= mysqli_fetch_array($sql2);
echo $data2['waktu'];
?>