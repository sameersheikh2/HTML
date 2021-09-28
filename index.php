<?php
$server = "localhost";
$name = "root";
$password = "";
$con = mysqli_connect($server, $name, $password);

if(!$con){
    die("connection to this database is failed". mysqli_connect_error());
}
echo "Success";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO 'sonyinfo' ('Name', 'Email' , 'message' , 'date') VALUES ('$name', '$email' , '$message', current_timestamp());"; 
echo $sql
?>