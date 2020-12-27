<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-control');

$server="localhost";
$username="root";
$password="";
$database="score";

$koneksi=mysqli_connect($server,$username,$password,$database) ; 
$query =mysqli_query($koneksi, "SELECT * FROM score");
// $output=mysqli_fetch_assoc($query);
// while($b6 = mysqli_fetch_array($query)){
//     // echo "<option value='".$b6[0]."'>".$b6[2]."</option>";
//     echo "data:".$b6[1]."\n\n";
//     // echo "data:".$b6[2]."\n\n";
// }
// $b6 = mysqli_fetch_array($query);
// echo json_encode($b6);
$a = mysqli_fetch_array($query);

echo "data: " . json_encode($a);
echo PHP_EOL;
// echo "event: user";
echo PHP_EOL;
// echo PHP_EOL;
// echo "data:".$output."\n\n";
// echo "data: The server time is: {$time}\n\n";
flush();
?>

