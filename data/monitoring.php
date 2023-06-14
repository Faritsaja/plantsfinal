<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "iot2";

// membuat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);

// mengambil data dari tabel sales
$query = "SELECT * FROM tabel_iot ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn, $query);

// mengonversi data menjadi format JSON
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}
echo json_encode($data);
?>