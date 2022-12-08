<?php
include("connect.php");

$search = $_POST['search'];
$bname = $_POST['bname'];


if ($connect->connect_error){
	die("Connection failed: ". $connect->connect_error);
}

$sql = "select * from book_cart where $bname like '%$search%'";

$result = $connect->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["bname"]."  ".$row["bprice"]."  ".$row["bdes"]."  ".$row["bimage"]."<br>";
}
} else {
	echo "0 records";
}

$connect->close();

?>
