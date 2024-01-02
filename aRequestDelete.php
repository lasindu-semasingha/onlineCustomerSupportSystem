<!-- IT22198518 WALD Semasingha-->
<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM `newrequest` WHERE rID=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:aRequest.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>