<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container">
<?php
    require('../controller/loginVerification.php');
    ?>
    <br><br>
    <h1>Login Page</h1>
    <br><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group">
        <label for="id">User ID</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="id" placeholder="Enter User ID" value=<?php echo $id ?>>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter Password" value=<?php echo $password?>>
    </div>
<button type="submit" class="btn btn-primary">Login</button>
</form>
</body>
</html>
    
