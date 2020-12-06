<?php
    require('../Model/viewModel.php');
    session_start();
    $userId = $name= $balance = $amount = '';
    $userId=$_SESSION["userId"];
    balanceRetrive($userId,$name,$balance);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount=$_POST['amount'];
    $userId=$_SESSION["userId"];
    if (isset($_POST['diposit'])) {
    $amount=$amount+$balance;
    updateBalance($amount,$userId);
    $amount='';
    balanceRetrive($userId,$name,$balance);
    }
    else if(isset($_POST['withdraw'])){
    if($balance<$amount+500){
    echo "you can not withdaw all of your money (minimum balance 500)";
    }
    else{
    $amount=$balance-$amount;
    updateBalance($amount,$userId);
    $amount='';
    balanceRetrive($userId,$name,$balance);
    }     
    }
    else if(isset($_POST['deleteAccount'])){
    deleteUserId($userId); 
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/FinalLabtask1/view/login.php',true,303);
    exit;
    }
}
?>
    
