<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM `feedback` WHERE fID=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:feedbackmanagement.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>