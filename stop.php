<?php

$koneksi=mysqli_connect('localhost','root','','score') ; 
    $query=mysqli_query($koneksi, "UPDATE score set waktu=0 where id=1");

?>