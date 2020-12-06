<?php
  function signUpReg($userId, $name, $pass, $balance){
  $servername = "localhost";
  $username = "admin";
  $password = "";
  $dbname = "office";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO customer (userId, name, pass, balance)
  VALUES ('$userId', '$name', '$pass', '$balance')";
  if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
?>
    
