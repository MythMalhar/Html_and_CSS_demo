<?php
include_once "./connection.php";   //futher code will be executed if file not found.

require_once "./connection.php";    //further code will not be executed if file is not found.
echo '<pre>';
print_r($_POST);

$uname=$_POST['username'];
$pass=md5($_POST['password']);
// echo md5($pass);
// exit;
// echo $uname;

$sql="INSERT into user (username,password) values ('$uname','$pass')";
echo $sql;
try{
    $con->exec($sql);
    echo '<script> alert("Registration succussfull")</script>';
    echo '<script> window.open("./login_form.html","_self")</script>';
    // header("Location: ./login_form.html");
}catch(PDOException $e){
    echo $e;
}
