<?php
session_start();3
include("connect.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <div style="text-align:center; padding:15%">
 <p style="font-size:50px; font-weight:bold" >Welcome to our website !
<?php  
if(isset($_SESSION['email'])){
    $email= $_SESSION['email']; 
    $query=mysqli_query($conn, "SELECT users.* FROM 'users' WHERE users.email = '$email'");
     while ($row= mysqli_fetch_array( $query)) {
        echo $row["name"];
        }
}
?>
</p>
<a href="logout.php">LogOut</a>
</div>
</body>
</html>