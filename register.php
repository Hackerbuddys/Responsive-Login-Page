<?php

include 'connect.php';

if(isset($_POST['register'])){
    $name=$_POST['name']
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password); //encrypt password

    $checkEmail="SELECT * From user where email='$email'"; 
    $result=$conn->query($checkEmail);
    if($result->num_rows >0){
        echo "This Email is already registered! Please Login.";
    }else{
        $insertQuery= "INSERT INTO user (name, email, password) VALUES('$name','$email', '$password') ";
        
        if ($conn->query($insertQuery) == TRUE) {
            header("Location: index.php");
        } else {
            echo "Error: ".$conn->error();
    }
}

if(isset($_POST['login'])) {
    $email= $_POST['email'];
    $password = $_POST[ 'password'];
    $password= md5($password);
    
    $sql = "SELECT * FROM user WHERE email ='$email' AND password='$password'";
    $result = $conn -> query($sql);
  
    if($result -> num_rows > 0 ) {
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION["email"] = $row[ "email"];
        header( "location: dashboard.php" );
    } else {
      echo "Wrong Username or Password!" ;

        
    }
}
?>

register.php

$firstName=$ POST['fName'1;

6

JS scriptjs

$lastName=$_POST['1Name'];

# style.css

$email=$_POST['email'];

$password=$_POST[ 'password'];

10

$password=md5($password);

11

$checkEmail="SELECT * From users where email='$email'";

12

$result=$conn->query($checkEmail);

13

if($result->num_rows>0){

14

echo "Email Address Already Exists I";

15

16

else

17

$insertouery="INSERT INTO users"