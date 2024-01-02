<!-- IT22188090 JMKS Jayaweera-->
<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM `csrNew` WHERE csID=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:csrmanagement.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>