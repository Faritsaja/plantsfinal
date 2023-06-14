<?php
//$connect = mysqli_connect('localhost', 'root', '', 'iot2');
//$sql2 = mysqli_query($connect, "SELECT kelembapan FROM tabel_iot ORDER BY id DESC");
//$data2= mysqli_fetch_array($sql2);
//echo $data2['kelembapan'];

$connect = mysqli_connect('localhost', 'root', '', 'iot2');
$sql2 = mysqli_query($connect, "SELECT kelembapan FROM tabel_iot ORDER BY id DESC");
$data2= mysqli_fetch_array($sql2);
echo $data2['kelembapan'];
?>