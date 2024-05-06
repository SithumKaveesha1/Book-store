<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `contacts` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "<script>alert('Data deleted successfully');</script>";
        echo "<script>window.location='display.php';</script>";
    }else{
        die(mysqli_error($con));
    }
}
?>
