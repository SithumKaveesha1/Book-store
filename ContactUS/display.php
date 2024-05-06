<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <button id="btn1"> <a href="user.php" class= "font_color">Add contact</a></button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
  
  $sql="Select * from `contacts`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $message=$row['message'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td> 
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$message.'</td>

        <td>
        <button class= "update" ><a href="update.php? updateid='.$id.'">Update</a></button>
        <button class= "delete"><a href="delete.php? deleteid='.$id.'">Delete</a></button>
    </td>
        
      </tr>';
    }
}
  
  ?>
  


  
    
  </tbody>
</table>

    </div>
</body>
</html>