<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container">
<?php
    require('../controller/signUpVerification.php');
?>
    <br><br>
    <h1>Sign Up</h1>
    <br><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group">
    <label for="userId">User ID</label>
    <input type="text" class="form-control" id="userId" name="userId" placeholder="Enter Your User ID Here" value="<?php echo $userId; ?>">
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="pass"  name="pass"placeholder="Enter Your Password Here" value="<?php echo $pass;?>">
    </div>
    <div class="form-row">
    <div  class="form-group col-md-6" >
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name Here" value="<?php echo $name;?>">
    </div>
    <div class="form-group col-md-6">
    <label for="balance">Balance</label>
    <input type="text" class="form-control" id="balance" name="balance" placeholder="Enter Your Balance Here" value="<?php echo $balance;?>">
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
</body>
</html>
    
