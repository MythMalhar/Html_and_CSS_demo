<?php
$servername="localhost";
$username="root";
$pass="";

// $conn =new mysqli($servername,$username,$pass);

// if($conn->connect_error){
//     die("connection failed : ".$conn->connect_error);
// }
// echo 'connected successfully'; 


//PDO method
try{
    $con=new PDO ("mysql:host=$servername;dbname=student",$username,$pass);
    echo 'connected successfully';
}catch(PDOException $e){
    echo 'Error occurred';
}
