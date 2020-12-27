<?php
    // $name=$_POST['name'];
	$koneksi=mysqli_connect('localhost','root','','score') ; 
    $query=mysqli_query($koneksi, "UPDATE score set musik=0 where id=1");
	
	
	// $sql = "INSERT INTO `crud`( `name`, `email`, `phone`, `city`) 
	// VALUES ('$name','$email','$phone','$city')";
	// if (mysqli_query($conn, $sql)) {
	// 	echo json_encode(array("statusCode"=>200));
	// } 
	// else {
	// 	echo json_encode(array("statusCode"=>201));
	// }
	// mysqli_close($conn);
?>