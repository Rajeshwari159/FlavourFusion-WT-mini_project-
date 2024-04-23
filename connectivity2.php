<?php
include("conn.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
}

$sql = "INSERT INTO cus_info (`username`,`email`,`password`) VALUES ('$username', '$email','$password')";
if($conn->query($sql) === TRUE){
    echo "<script>alert('new record created successfully')</script>";
    header('location:login.php');
} else{
    echo "Error:" .$sql . "<br>" .$conn->error;
}
?>