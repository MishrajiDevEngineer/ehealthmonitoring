<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>

      <div>
        <caption><b><i>Click Below Image to View Health Details </i></b> </caption>
        <p><a href="mainpage.html"><img src="jpg/background5.jpg" alt="clickable image to redirect on EHealth-Monitor page" style="width:420px;"></a></p>
      </div>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>