<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbName = "miniproject";
  $conn = mysqli_connect($host,$username,$password,$dbName);

  if(!$conn){
    die("can not connect with database");
  }
   
?>