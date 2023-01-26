<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>



    <div class="container">
        <form action="auth.php" method="post" id="loginp">
            <h1>Register Page</h1>
            <hr>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Name:</label>
                </div>
                <div class="col-75">
                    <input id="fname" type="text" name="rnm" required>
                </div>
                <div class="col-25">
                    <label for="fname">Enrollment no:</label>
                </div>
                <div class="col-75">
                    <input id="fname" type="number" name="re_n" required>
                </div>
                <div class="col-25">
                    <label for="fname">Semester:</label>
                </div>
                <div class="col-75">
                    <input id="fname" type="number" name="rsem" required>
                </div>
                <div class="col-25">
                    <label for="fname">Password:</label>
                </div>
                <div class="col-75">
                    <input id="p" type="password" name="rpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                        required><span toggle="#password-field"
                        class="fa fa-fw fa-eye field_icon toggle-password"></span>
                </div>



                <input type="submit" class="btn btn-primary" name="rc" value="Register">
                <div class="text-center">
                    <p>Already have a account? <a href="index.php">Login</a></p>
                </div>

        </form>
    </div>

</html>