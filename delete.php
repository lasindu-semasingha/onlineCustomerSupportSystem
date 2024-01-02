<!-- IT22198518 WALD Semasingha-->
<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM `signup` WHERE UserID=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:usermanagement.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>