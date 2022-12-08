 <?php 
include("api\connect.php");
 ?> 

<?php
$connect=mysqli_connect("localhost", "root", "Mahesh777@", "kwality") or die("connection failed!");

if($connect){
    
}
else{
    echo"Not Connected!";
}

?>

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Library</title>
  </head>
  <body>
   
   <?php include('api/nav.php') ?>
    
    
   <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="http://localhost/kwality/api/login.php" method="POST">
            
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <!-- <input type="email" class="form-control" id="inputEmail4"> -->
                  <input type="email" name="email" class="input form-control" placeholder=""> 
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <!-- <input type="password" class="form-control" id="inputPassword4"> -->
                  <input type="password" name="password" class="input form-control" placeholder=""> 
                </div>
              </div>
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
      </div>
    </div>
    
    
    <!--Sign Up -->
    <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="signUpModalLabel">Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="http://localhost/kwality/api/register.php" method="POST">
              <div class="form-group">
                <label for="textInputEmail1">Username</label>
                <input type="text" name="cname" class="input form-control" placeholder="" aria-describedby="emailHelp" required> 
                <!-- <input type="text" class="form-control" id="textInputEmail1" aria-describedby="emailHelp" required> -->
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="input form-control" placeholder="" aria-describedby="emailHelp" required> 
                <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required> -->
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                
                <input type="password" name="password" class="input form-control" placeholder="" aria-describedby="emailHelp" required> 
                <!-- <input type="password" class="form-control" id="exampleInputPassword1" required> -->
                
                <!-- <php 
                $password =$_POST["password"];

                $uppercase = preg_match('@[A-Z]@', $password);
                $lowercase = preg_match('@[a-z]@', $password);
                $number    = preg_match('@[0-9]@', $password);
                $specialChars = preg_match('@[^\w]@', $password);

                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                       echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                }else{
                       echo 'Strong password.';

                } -->

                ?>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Comform Password</label>
                <input type="password" name="comform" class="input form-control" placeholder="" aria-describedby="emailHelp" required> 
                <!-- <input type="password" class="form-control" id="exampleInputPassword1" required> -->
              </div>
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
      </div>
    </div>

    <!-- main body -->
  


    <?php
  $sql = "SELECT * FROM `book_cart`";

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


    <div class="d-flex my-5">
      <?php for ($i = 0; $i < sizeof($data); $i++) { ?>
      
      <div class="skill row">
        <div class="col-lg-12 col-md-4 col-sm-4 row1">
            <div class="card">
              <img src="<?php echo $data[$i]["bimage"]; ?>" class="card-img-top" alt="books" height="490px" width="500px">
              <div class="card-body">
                <h5 class="card-title"><strong><?php echo $data[$i]["bname"]; ?></strong> <b>Price- ₹<?php echo $data[$i]["bprice"]; ?></b></h5>
                <p class="card-text"><?php echo $data[$i]["bdes"]; ?></p>
                <button type="button" class="btn btn-primary"><a href="order.html">View More ...</a></button>
              </div>
            </div>
          </div>
        </div>

    <?php
    }
    ?>
 
    </div> 



    <!-- <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 ">
          <div class="col mb-6 my-3">
            <div class="card">
              <img src="https://ft-article-images.s3.ap-south-1.amazonaws.com/images_1_b0dae49e72.jpeg" class="card-img-top" alt="sanket" height="490px">
              <div class="card-body">
                <h5 class="card-title"><strong>Novel - Chava</strong> <b>Price- $50</b></h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button type="button" class="btn btn-primary"><a href="order.html">View More ...</a></button>
              </div>
            </div>
          </div>
          <div class="col mb-6 my-3">
            <div class="card">
              <img src="https://m.media-amazon.com/images/I/81c5v4EHQTL.jpg" class="card-img-top" alt="sanket" width="288px" height="490px">
              <div class="card-body">
                <h5 class="card-title "><strong>UPSE Book</strong><b>Price- $50</b></h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button type="button" class="btn btn-primary"><a href="order.html">View More ...</a></button>
              </div>
            </div>
          </div>
          <div class="col mb-6 my-3">
            <div class="card">
              <img src="https://qph.cf2.quoracdn.net/main-qimg-ae3b8eab808d945029ea04cd65b99844-lq" class="card-img-top" alt="sanket"  height="515px">
              <div class="card-body">
                <h5 class="card-title"><strong>Novel - Mrutunjay</strong> <b>Price- $50</b></h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                <button type="button" class="btn btn-primary"><a href="order.html">View More ...</a></button>
              </div>
            </div>
          </div>
          <div class="col mb-6 my-3">
            <div class="card">
              <img src="https://m.media-amazon.com/images/I/71UfppKigaL.jpg" class="card-img-top" alt="..." height="490px">
              <div class="card-body">
                <h5 class="card-title"><strong>Programing Book</strong> <b>Price- $50</b></h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button type="button" class="btn btn-primary"><a href="order.html">View More ...</a></button>
              </div>
            </div>
          </div>
          <div class="col mb-6 my-3">
            <div class="card">
              <img src="https://m.media-amazon.com/images/I/71R58lgksxL.jpg" class="card-img-top" alt="..." style="height: 490px;">
              <div class="card-body">
                <h5 class="card-title"><strong>Chemistry Book</strong>  <b>Price- $50</b></h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button type="button" class="btn btn-primary"><a href="order.html">View More ...</a></button>
              </div>
            </div>
          </div>
          <div class="col mb-6 my-3">
            <div class="card">
              <img src="https://m.media-amazon.com/images/I/81EzbrasB3L.jpg" class="card-img-top" alt="..." height="490px">
              <div class="card-body">
                <h5 class="card-title"><strong>Physics Book</strong>  <b>Price- $50</b></h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button type="button" class="btn btn-primary"><a href="order.html">View More ...</a></button>
              </div>
            </div>
          </div>
        </div>
        </div>

 
    
    <div class="container-fulid">
    <span class="d-block p-2 bg-dark text-white text-center">eLibrary &copy; All Rights are Reserved!</span>
  </div> -->
  


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>