<?php
include("api/connect.php");
if(!isset($_POST['bid'])){
  echo "404";
  exit;
}
extract($_POST);
$bid = $_POST['bid'];
?>

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="index.css">
    <style>
.img-fluid:hover{
  transition: 1s;
  transform: scale(1.08);
  border-radius: 5px;
  cursor: pointer;
  box-shadow: 5px 5px 15px -5px rgba(0, 0, 0.5, 0.6) ;

}

    </style>
 
    <title>eLibrary</title>
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><i class="bi bi-book mx-2"></i><i>eLibrary</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

  <?php

  $connect=mysqli_connect("localhost", "root", "Mahesh777@", "kwality") or die("connection failed!");
  $sql = "SELECT * FROM book_cart WHERE bid=$bid";

  $result = mysqli_query($connect, $sql); {
  }

  $data = [];
  if (mysqli_num_rows($result) > 0) {


    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

      array_push($data, $row);
    }
  }
  ?>
    

      <h2 class="my-4 mx-5 text-primary"><b>Book Details :  </b></h2>
      <hr>
      <div class="container my-5">
        <div class="row">
            <div class="col-4">
                <img src="images11.jpg" class="img-fluid" alt="..." height="200px" >
          
            </div>
            <div class="col-8">
            <h2>
              <b class="text-info">Book Name : </b><?php echo $data[0]["bname"]; ?>
            </h2><br>

            <p><h5><b class="text-info">Description :</h5></b><?php echo $data[0]["bdes"]; ?></p> 
         
           

            <h5><b class="text-info">Langauge Avilable :</b>
            <ol class="mx-3" >
              <li  type="disc">English
              </li>
              <li  type="disc">Hindi</li>
              <li  type="disc">Gujarati</li>
              <li  type="disc">Marathi</li>
            </ol>
            </h5>

            <h2> <b>Price : <i class="text-success">₹ <?php echo $data[0]["bprice"]; ?></i></b></h2>
            
          
          <form>
            <div class="form-group">
              <div class="form-group col-4">
                <select class="form-control">
                  <option>Quantity</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                
                </select>
              </div>
          
          </form>
          <br>
     <button type="button" class="btn btn-warning"><a href="dilller.html">Order Now</a></button>
          
     
            </div>
          </div>
        </div>
  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
    