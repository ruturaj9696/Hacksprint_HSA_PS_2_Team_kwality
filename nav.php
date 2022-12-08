

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><i class="bi bi-book mx-2"></i> eLibrary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Novel</a>
                <a class="dropdown-item" href="#">Magazines</a>
               
                <a class="dropdown-item" href="#">College Books</a>
                <a class="dropdown-item" href="#">Journals</a>
              </div>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="contactus.html">Contact us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
              <form action="index.php" method="POST">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" >Search</button>
              </form>
            <div class="mx-4">
            <?php
            if( isset($_SESSION['username']) && !empty($_SESSION['username']) ){
            ?> 
                <button type="button" class="btn btn-primary mx-3" data-toggle="modal" data-target="#loginModal">Logout</button> 
            <?php 
            }
            else {
            ?>
                <button type="button" class="btn btn-primary mx-3" data-toggle="modal" data-target="#loginModal">Login</button>
            <?php
            }
              ?>
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signUpModal">Sign Up</button>
          </div>
          </form>
        </div>
      </nav>