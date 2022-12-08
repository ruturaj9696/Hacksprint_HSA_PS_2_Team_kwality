<?php
session_start();
include("connect.php");
$email=$_POST["email"];
$password=$_POST["password"];

$check=mysqli_query($connect,"SELECT * from customer WHERE email='$email' AND password='$password'");

if (! empty($_POST) && $_POST['email'] === 'valid_username' && $_POST['password'] === 'valid_password')
{
    $_SESSION['logged_in'] = true;
    header('Location: /index.php');
}

if(mysqli_num_rows($check)>0){
    $userdata = mysqli_fetch_array($check);
    
    $_SESSION['userdata']=$userdata;

    echo'
    <script>
    alert("login Successfull!");
    window.location="/kwality/index.php"; 
    </script>';
}
else{
    echo'
    <script>
    alert("USER NOT FOUND !!!");
    window.location="/kwality/index.php";
    </script>';
}
?>


