<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="Assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="Assets/bootstrap/js/popper.min.js"></script>
    <script src="Assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css">    
</head>
<body>
    <div class="container">
        <h1 class="text-center text-info">LogIn</h1>
        <form action="loginHandler.php" method="post">
            <input class="form-control" type="text" name="u_name" placeholder="UserName"><br><br>
            <input type="password" class="form-control" name="u_password" id="" placeholder="Password"><br><br>
            <input class="btn btn-outline-info btn-block"type="submit" value="Login" name="btn_login"><br><br> 
            <p class="text-center">Don't Have an Account? <a href="register.php" class="btn btn-outline-info ml-2">Register</a></p>           
        </form>
    </div>
</body>
</html>