<!-- IT22198518 WALD Semasingha-->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "genius247";
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "Genius 24/7 Data Network";
?>