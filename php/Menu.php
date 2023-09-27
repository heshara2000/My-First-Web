

<!DOCTYPE html>
<html lang="en">
<head>
  <title>mennu page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary  py-0 my-0">
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
          <a class="nav-link" href="./php/Menu.php">Menu</a>
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

  
<div class='containers'>
  <h2 class='heading'>our services</h2>

  <div class='box-container'>
  <?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'fruits_store';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $query = "SELECT * FROM menu_item";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo  "
          <div class='box'>
            <img src={$row['img_url']} alt=''  name='image'>
            <h5>{$row['Name']}</h5>
            <p >{$row['description']} </p>
            <p ><b>{$row['Price']}</b> </p>
            <a href='#' class='btn btn-primary'>Add to cart  <i class='fa fa-shopping-cart' id='cart-btn'></i></a>
          </div>
          " ;
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

$conn->close();

?>

  </div>


</div>


</body>
</html>
