<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container">
<?php
    require('../controller/viewVerification.php');
?>
    <br><br>
    <h1>View Page</h1>
    <br><br>
    <table class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">#</th>
    <th scope="col">User Id</th>
    <th scope="col">Name</th>
    <th scope="col">Balance</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th scope="row">1</th>
    <td><?php echo $userId?></td>
    <td><?php echo $name?></td>
    <td><?php echo $balance?></td>
    </tr>
    </tbody>
    </table>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <br><br>
    <br><br>
    <div class="form-group">
    <label for="amount">Enter Amount</label>
    <input type="text" class="form-control" name="amount" placeholder="Enter Amount" id="amount" value="<?php echo $amount;?>">
    </div>
    <br>
    <button type="submit" value="diposit" name="diposit" class="btn btn-success btn-lg">Diposit</button>
    <button type="submit" value="withdraw" name="withdraw" class="btn btn-danger btn-lg">Withdraw</button>
    <br><br><br>
    <hr>
    <button type="submit" value="deleteAccount" name="deleteAccount" class="btn btn-danger btn-lg">Delete Account</button>
</form> 
</body>
</html>
    
