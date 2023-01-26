<?php 
require_once("config.php");

?>
<html>

<body>

    <div class="container">
        <form action="auth.php" method="post" id="loginp">
            <input type="hidden" value="<?php echo $_SESSION['re_n'];?>" name="en_no" />
            <div class="row">
                <div class="col-25">
                    <label for="fname">Name :- <?php echo $_SESSION['rnm']."<br>";?></label>
                </div><br>
                <div class="col-25">
                    <label for="fname">Enrollment No :- <?php echo $_SESSION['re_n'];?></label>
                </div><br>
                <div class="col-25">
                    <label for="fname">Sem :- <?php echo $_SESSION['rsem'];?></label>
                </div><br>
                <div class="col-75">
                    <label for="fname">Your Sgin In completed | Login Now </label>
                </div><br>

                <div class="form-label">
                    <a class="btn btn-primary" href="index.php?action=logout"> Go to Login Page</a>
                </div>


        </form>




</body>

</html>