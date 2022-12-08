<?php
include("connect.php");

$ofname=$_POST['ofname'];
$olname=$_POST['olname'];
$oemail=$_POST['oemail'];
$oaddress=$_POST['oaddress'];
$omobile=$_POST['omobile'];


$query=mysqli_query($connect,"INSERT INTO cust_order (ofname, olname, oemail, oaddress, omobile) VALUES ('$ofname', '$olname', '$oemail', '$oaddress', '$omobile')");
    if($query){
    echo'
    <script>
             alert("Order placed Successfull!");
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