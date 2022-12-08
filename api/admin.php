<?php
include("connect.php");

$bname=$_POST['bname'];
$bprice=$_POST['bprice'];
$bdes=$_POST['bdes'];


$query=mysqli_query($connect,"INSERT INTO book_cart (bname, bprice, bdes) VALUES ('$bname', '$bprice', '$bdes')");
    if($query){
    echo'
    <script>
             alert("Book Added Successfull!");
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


?>