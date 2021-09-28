<?php
<<<<<<< HEAD
if(isset($_POST['name'])){
=======
>>>>>>> 7d35e5b89998a39989d044addaa407e6f8892a8c
$server = "localhost";
$name = "root";
$password = "";
$con = mysqli_connect($server, $name, $password);

if(!$con){
    die("connection to this database is failed". mysqli_connect_error());
}
<<<<<<< HEAD
// echo "Success";
=======
echo "Success";
>>>>>>> 7d35e5b89998a39989d044addaa407e6f8892a8c

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
<<<<<<< HEAD
$sql = "INSERT INTO `sonyinfo`.`sonyinfo`(`Name`, `Email`, `Message`, `Date`) VALUES ('$name', '$email', '$message', current_timestamp());"; 

// echo $sql;

if($con->query($sql) == true){
    // echo "Successfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="sony-header">
    <h1 id="top">Contact Us</h1>
  </div>
  <br />
  <img src="./Images/ContactGiphy.gif" alt="gif"
    style="width: 100%; height: 100%; position: absolute; z-index: -1;height: auto ;">
  <ul class="list">
    <li><a href="Index.html">Home</a></li>
    <li><a href="./Shop.html">Shop More</a></li>
    <li><a href="./About.html">About</a></li>
  </ul>
  <br />
  <br />

  <div class="container">
    <form action="index.php" method="POST">
      <h3>Full Name</h3>
      <input class="name" type="text" id="name" placeholder="Enter your full name" />
      <h3>Email</h3>
      <input class="email" type="email" id="email" placeholder="Enter your email" />
      
      <textarea name="message" id="message" placeholder="Type your message here" cols="50" rows="10"></textarea>
      
      <button class="subbtn" type="submit">
        Submit
      </button>
    </form>
  </div>
</body>

</html>
=======
$sql = "INSERT INTO 'sonyinfo' ('Name', 'Email' , 'message' , 'date') VALUES ('$name', '$email' , '$message', current_timestamp());"; 
echo $sql
?>
>>>>>>> 7d35e5b89998a39989d044addaa407e6f8892a8c
