<?php  

$server = "localhost";
$user = "root";
$password="";
$db = "tcs";

$con = mysqli_connect($server,$user,$password,$db);

if($con){ 
    echo "connection succesfull";
}else{
    echo "connection unsuccesfull";
}

?>