<?php 
require_once("config.php");
check_user();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>

<body>



    <div class="container">
        <form action="auth.php" method="post" id="loginp">
            <input type="hidden" value="<?php echo $_SESSION['loggedin_e_n'];?>" name="en_no" />
            <div class="row">
                <div class="col-25">
                    <label for="fname">Name :- <?php echo $_SESSION['loggedin_name']."<br>";?></label>
                </div><br>
                <div class="col-25">
                    <label for="fname">Enrollment No :- <?php echo $_SESSION['loggedin_e_n'];?></label>
                </div><br>
                <div class="col-25">
                    <label for="fname">Sem :- <?php echo $_SESSION['loggedin_sem'];?></label>
                </div><br>
                <div class="col-25">
                    <label for="fname">Date :- <?php echo date('F j Y');?></label>
                </div><br>
                <div class="col-25">
                    <label for="fname">Time :- <?php echo date('h:m:s a');?></label>
                </div><br>

                <div class="form-label"><input class="btn btn-primary" type="submit" name="present" value="present">
                    <a class="btn btn-primary" href="auth.php?action=logout">Logout</a>
                </div>


        </form> <?php
      print_attancance();
      
    ?>


</body>

</html>