<!DOCTYPE html>
<html lang="en">

<head>
    <title>Attandance System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "icon" href = 
"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ-oHTZZM8DKEgL4ixwKRA99e-NKmlBHH9Rw&usqp=CAU" 
        type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=number] {
    -moz-appearance: textfield;
}

* {
    box-sizing: border-box;
}



label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 300px) {

    .col-25,
    .col-75,
    input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>

<body>



    <script>
    $(document).on('click', '.toggle-password', function() {

        $(this).toggleClass("fa-eye fa-eye-slash");

        var input = $("#p");
        input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
    });
    </script>

    <?php
session_start();
date_default_timezone_set("Asia/Kolkata");

$servername ="localhost";
$username ="root";
$password ="";
$db="student database";
global $conn;
$conn = mysqli_connect($servername,$username,$password,$db);

if (!$conn){
    die("connection failed:".mysqli_connect_error());
}



//echo "connected sucsessfully"
function check_user(){
    if( ! isset($_SESSION['loggedin_name'])){
        header("Location: index.php?message=logged out");
    }
}


$slots=array('10:00:00','11:00:00','12:00:00','13:00:00');    

function in_time($current_time,$start,$end){
      
     $time = strtotime($current_time);

    if($time > strtotime($start) && $time < strtotime($end)){
        return true;;
    }else{
        return false;
    }
 

}


function print_attancance(){
    global $conn;
    if(   isset($_SESSION['loggedin_e_n'])){
        $en_no = $_SESSION['loggedin_e_n'];
        $date = date('Y-m-d');
        $sql7 = "select * from  `attendance` where en_no=". $en_no ." and date='".$date."'";

       $result7 = $conn->query($sql7);
       $rows = $result7 -> fetch_all(MYSQLI_ASSOC);
       $colors = array("date", "time");

       echo "<table border='1'  cellpadding='2' class='footable mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--4dp full-width'>";

       echo "<tr>  <th>Date</th> <th>Time</th> </tr>";
       

      
       for ($row = 0; $row < count($rows); $row++) {
        echo "<tr>";
        foreach ($colors as $value) {
            echo "<td>".$rows[$row][$value]."<br></td>";
          }
        
        echo "</tr>";
      }echo "</table>";
     

    }
}

?>
</body>

</html>