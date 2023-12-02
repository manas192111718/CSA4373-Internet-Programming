<?php 
  if($_POST) {
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "page";
  
  $conn = new mysqli($servername, $username, $password, $database);
  if($conn->connect_error) {
    echo "Connection Error";
  }
  $user = $_POST["username"];
  $pass = $_POST["password"];
 
  $sql = "INSERT INTO information(Username,password) VALUES ('$user', '$pass')";
 
  if($conn->query($sql)) {
   echo "Data stored successfully";
  } else { 
   echo "Something went wrong";
  }
   
   $conn->close();
  }
?>
