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
  <div class="container-fluid" style="background-color: blue;">
    <a class="navbar-brand" href="#">Fruit~store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
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
          <a class="nav-link" href="register.php">sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Login.php">Log In</a>
        </li>
      
        
      </ul>
    </div>
  </div>
</nav>
  


<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
				<h2 class="text-center mb-4">User Registration Form</h2>
				<form action="conn.php" method="POST">
					<div class="mb-3">
						<label for="username" class="form-label">Username:</label>
						<input type="text" class="form-control" name="username" required>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email:</label>
						<input type="email" class="form-control" name="email" required>
					</div>
          <div class="mb-3">
						<label for="number" class="form-label">Mobile Number:</label>
						<input type="number" class="form-control" name="number" required>
					</div>
          <div class="mb-3">
						<label for="address" class="form-label">Address:</label>
						<input type="address" class="form-control" name="address" required>
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password:</label>
						<p>at least include 8 characters</p>
						<input type="password" class="form-control" name="password" required>
					</div>
					<div class="mb-3">
						<label for="confirm_password" class="form-label">Confirm Password:</label>
						<input type="password" class="form-control" name="confirm_password" required>
					</div>
          <br><br>
					<div class="text-center">
						<button type="submit" class="btn btn-primary" name="submit_btn">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>





</body>
</html>











