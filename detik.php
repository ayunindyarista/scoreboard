<?php

$koneksi=mysqli_connect('localhost','root','','score') ; 
    $query=mysqli_query($koneksi, "UPDATE score set detik=60 where id=1");

?>