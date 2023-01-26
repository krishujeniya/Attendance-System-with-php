<?php 
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
  
    <script src="../lib/jquery.js"></script>
    <script src="../dist/jquery.validate.js"></script>


</head>

<body>


    <div class="container">
        <form action="auth.php" method="post" id="loginp">
            <h1>Login Page</h1>
            <hr>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Enrollment no:</label>
                </div>
                <div class="col-75">
                    <input id="fname" type="number" name="e_n" title="Required Enrollment No" required>
                </div>
                <div class="col-25">
                    <label for="fname">Password:</label>
                </div>
                <div class="col-75">
                    <input id="p" type="password" name="password" required><span toggle="#password-field"
                        class="fa fa-fw fa-eye field_icon toggle-password"></span>
                </div>



                <input type="submit" class="btn btn-primary" name="login" value="Login">
                <div class="text-center">
                    <p>Create New Record? <a href="register.php">Register</a></p>
                </div>

        </form>
    </div>
</body>


</html>