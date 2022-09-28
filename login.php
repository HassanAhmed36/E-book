<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  include 'db.php';


  $err = false;
  $email = @$_POST["email"];
  $password = @$_POST["password"];
  
  $q = "SELECT * FROM `user` Where email='$email' AND password='$password';";
  $res = mysqli_query($con, $q);
  $num = mysqli_num_rows($res);
  
  if ($num) {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    if($email == 'admin@gmail.com'){
    header('location: dashboard.php');

    }
    


    header('location: index.php');
  } else {
    
    $err = true;
    
  }
};


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="col-md-4 m-auto py-5">
  <?php
  if(@$err){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Invalid Cradintials</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>
  <div class="container  mt-5">
    <h2 class="text-center">Login</h2>
    <form class="mt-5" action="login.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" reset>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" reset>
      </div>
      <p>Don't have an account? <a href="Rigester.php">Rigester</a></p>

      <button type="submit" class="btn btn-dark">Login</button>
    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>