<?php


// connection php file


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fruit~store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About-Us.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="regiter.php">sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Login.php">Log In</a>
        </li>
      
        
      </ul>
    </div>
  </div>
</nav>

<section class="vh-100">
  <div class="container py-5 h-100">
  <div class="row d-flex align-items-center justify-content-center h-100">
  
  <div class="col-md-12 col-lg-7 col-xl-6">
  <img src="../assets/welcome.png" alt="login backgrnd">

</div>
     
    
   
      <div class="col-md-0 col-lg-5 col-xl-10 ">
        <form action="menu.php" method="POST">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="log_btn">Log in</button><br>


          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
            <p>create a new account <a href="register.php">Register here</a></p>
          </div>

         

        </form>
      </div>
    </div>
  </div>
</section>
  
<div class="container">
 
 
</div>

</body>
</html>
