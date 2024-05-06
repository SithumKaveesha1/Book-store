<?php
include 'connect.php';
$id = $_GET['updateid'];
//before update data display
$sql = "SELECT * FROM `contacts` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$message = $row['message'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "UPDATE `contacts` SET name='$name', email='$email', phone='$phone', message='$message' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Data updated successfully');</script>";
        echo "<script>window.location='display.php';</script>";
    } else {
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <h1>Contact </h1>

        <form method="post">

        <h2>Contact Form</h2>

            <div class="form_group">
                <input type="text" placeholder="Enter your Name" name="name" value=<?php echo $name;?>>
            </div>
            <div class="form_group">
                <input type="email" placeholder="Enter your Email" name="email"value=<?php echo $email;?>>
            </div>
            <div class="form_group">
                <input type="phone"placeholder="Enter your Phone" name="phone"value=<?php echo $phone;?>>
            </div>
            <div class="form_group">
                <textarea cols="30" rows="5" placeholder="Enter Message" name="message"><?php echo $message;?></textarea>

            </div>


            <button id="btn" type="submit" name="submit">Update</button>
        </form>

    </div>
</body>
</html>