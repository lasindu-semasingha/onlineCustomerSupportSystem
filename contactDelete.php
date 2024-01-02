<!-- IT22198518 WALD Semasingha-->
<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM `contactus` WHERE cID=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:contacting.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>