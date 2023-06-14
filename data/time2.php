<?php
$connect = mysqli_connect('localhost', 'root', '', 'iot2');
$sql2 = mysqli_query($connect, "SELECT waktu FROM tabel_iot ORDER BY id DESC");
$data2= mysqli_fetch_array($sql2);
echo $data2['waktu'];
?>