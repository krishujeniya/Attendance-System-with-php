<?php
require_once("config.php");




if( isset( $_POST['e_n'] ) && isset($_POST['password'])){
  
  $er_no = $_POST['e_n'];
  $password = $_POST['password'];
 $sql = "SELECT * FROM `student` WHERE `en_no` = ".$er_no." AND `password` = '".$password."';";
  $result = $conn->query($sql);

  
  
  if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
      $_SESSION['loggedin_name']  = $row['name']; 
      $_SESSION['loggedin_e_n']  = $row['en_no'];
      $_SESSION['loggedin_sem']  = $row['sem'];
      header("Location: result.php");
      }
    }else{
      echo "<script>window.location.href = 'index.php';alert('Sorry Invalid Username and Password!!!');</script>";
    }
  }


if(isset($_POST['en_no']) && isset($_POST['present'])){

 

  //echo $_POST['en_no'];
   $ldate=date('Y-m-d');
   $ltime=date('H:m:s');
   $time =  date('H', strtotime($ltime));
 
   $start =  date('H:m:s',strtotime($time.':00:00'));

   $end =   date('H:m:s', strtotime(  $start . "+1 hour")) ;

  
  $lennumber=$_SESSION['loggedin_e_n'];
  
    $sql1 = "SELECT  `en_no`, `date`, `status`,`time` FROM `attendance` where en_no=" . $lennumber ."
  and time > '" . $start."'";

  $result1 = $conn->query($sql1);

  




    if(in_time($ltime,$start,$end) && $result1->num_rows==0){
   
      //echo "<br><div class='footable mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--4dp full-width'></div>";
      $sql = "INSERT INTO  `attendance` ( `en_no`,  `date`,  `status`,  `time`) 
      VALUES ($lennumber,'$ldate','p','$ltime')";

       $result = $conn->query($sql);
       echo "<script>window.location.href = 'result.php';alert('You are sucssesfully Present!');</script>";
    }else{echo "<script>window.location.href = 'result.php';alert('You are already present!');</script>";
      //echo "<br><div class='footable mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--4dp full-width'></div>";
    }

   
   

 
 
  }
      



if( isset( $_POST['re_n'] ) && isset($_POST['rpassword']) && isset($_POST['rnm'])&& isset($_POST['rsem']) &&$_POST['re_n']!="" && $_POST['rpassword']!="" && $_POST['rnm']!="" && $_POST['rsem']!=""){
          $rname=$_POST['rnm'];
          $ren_no=$_POST['re_n'];
          $rsem=$_POST['rsem'];
          $rpassword=$_POST['rpassword'];
          
          $_SESSION['rnm']=$rname;
          $_SESSION['re_n']=$ren_no;
          $_SESSION['rsem']=$rsem;
          $_SESSION['rpassword']=$rpassword;
          
          
          $sql1 = $conn->query("INSERT INTO `student` (`name`, `en_no`, `sem`, `password`) VALUES ('$rname',$ren_no,'$rsem','$rpassword')");

          header("Location: result2.php"); 
         
        }

  
if(isset($_GET['action']) && $_GET['action']=='logout' ){
  session_destroy();
  header("Location: index.php"); 
}        

    ?>