<?php
include("connect.php");

$cname=$_POST['cname'];
$email=$_POST['email'];
$password=$_POST['password'];
$comform=$_POST['comform'];


if($password==$comform){
    $insert=mysqli_query($connect,"INSERT INTO customer (cname, email, password, comform) VALUES ('$cname', '$email', '$password', '$comform')");
    if($insert){
    echo'
    <script>
             alert("Registration Successfull!");
             window.location="/kwality/index.php";
    </script>
    ';
    }
    else{
        echo'
        <script>
        alert("Some Error occured!");
        window.location="/kwality/index.php";
        </script>';
    }
}
else{
    echo'
    <script>
    alert("Password and Comform Password does not match!");
    window.location="/kwality/index.php";
    </script>';
}


?>