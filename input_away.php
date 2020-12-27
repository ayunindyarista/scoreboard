<?php

$away  = $_POST['away'];
$login        = $_POST['login'];
$sandi        = $_POST['sandi'];
$optradio     = $_POST['optradio'];

// Create connection
$conn = new mysqli('localhost', 'root', '', 'aset_kantor');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `pengguna`(`id_pengguna`, `login`, `sandi`, `peran`)
        VALUES ('$id_pengguna','$login','$sandi','$optradio') ";

$result = $conn->query($sql);

if($result){
  echo "Data Berhasil Ditambah";
}


 ?>
