<?php
    require('../Model/signUpModel.php');
    $userId = $name = $pass = $balance = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["userId"]) ){
    echo "userId required";
    }
    else if(empty($_POST["name"])){
    echo "name required";
    }
    else if(empty($_POST["pass"]) ){
    echo "password required";
    }
    else if(empty($_POST["balance"])){
    echo "balance required";
    }
    else{
    $userId=$_POST["userId"];
    $name=$_POST["name"];
    $pass=$_POST["pass"];
    $balance=$_POST["balance"];
    signUpReg($userId, $name, $pass, $balance);
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/FinalLabtask1/view/login.php',true,303);
    exit;
    }
}
?>
    
