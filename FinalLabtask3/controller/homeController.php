<?php
require('../model/homeModel.php');
session_start();
$userName = $id = $password = $email = $dob = "";
$id=$_SESSION["id"];
$row=viewData($id);
$userName = $row["userName"];
$email = $row["email"];
$dob = $row["dob"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['deleteAccount'])){
deleteId($id);
header('Location: http://'.$_SERVER['HTTP_HOST'].'/FinalLabtask3/view/login.php',true,303);
exit;
}
if (isset($_POST['submit'])) {
$email=$_POST["emailn"];
updateEmail($id,$email);
$row=viewData($id);
$userName = $row["userName"];
$email = $row["email"];
$dob = $row["dob"];

 }
}