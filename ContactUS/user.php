<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $sql="insert into `contacts` (name,email,phone,message) values('$name','$email','$phone','$message')";
    $result=mysqli_query($con,$sql);
    if($result){
        //javascript code
        echo "<script>alert('Data inserted successfully');</script>";
        echo "<script>window.location='display.php';</script>";
    }else{
        die(mysqli_error($con));
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="container">
    <h2>Contact Form</h2>

        <form method="post">

            <div class="form_group">
                <input type="text" placeholder="Enter your Name" name="name" >
            </div>
            <div class="form_group">
                <input type="email" placeholder="Enter your Email" name="email">
            </div>
            <div class="form_group">
                <input type="phone"placeholder="Enter your Phone" name="phone">
            </div>
            <div class="form_group">
                <textarea cols="" rows="5"placeholder="Enter Message" name="message"></textarea >
            </div>


            <button id="btn" type="submit" name="submit">Submit</button>
        </form>
        

    </div>
    
</body>
</html>