<?php
function loginCheck($id, $password){
$servername = "localhost";
$username = "admin";
$pass = "";
$dbname = "sky";
$conn = new mysqli($servername, $username, $pass, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id FROM userinfo WHERE id='".$id."'AND password= '".$password."' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$conn->close();
return true;} 
else {
$conn->close();
echo "0 results";
return false; 
}}