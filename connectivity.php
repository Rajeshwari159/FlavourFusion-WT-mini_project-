<?php
include("conn.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM cus_info WHERE username = '$username' AND password ='$password'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo "Login successful!";
        header('location: ind.html');

    }
    else{
        echo "Invalid username or password";
        header('location: login.php');
    }
}
?>