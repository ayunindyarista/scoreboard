<?php

$koneksi=mysqli_connect('localhost','root','','score') ; 
    $query=mysqli_query($koneksi, "UPDATE score set menit=menit-1 where id=1");

?>