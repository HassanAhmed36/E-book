<?php
session_start();
if (!@($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location: login.php');
    exit;
}





?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
	
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <header class="header_section long_section px-0">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <span>
                        E-books
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="Book.php">Books <span class="sr-only">(current)</span></a>
                            </li>

                            </li>

                            <?php
                            if ($_SESSION['email'] == 'admin@gmail.com') {
                                echo '<li class="nav-item">
                <a class="nav-link" href="add.php">add book</a>
              </li>';
                            }

                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>

                        </ul>
                    </div>
                    <div class="quote_btn-container ">

                        <?php
                        if (@$_SESSION['email']) {
                            echo '<a href="logout.php" class="text-decoration-none">
              <span>
                Logout
              </span>
                
            </a>';
                        } else {
                            echo ' <a href="login.php" class="text-decoration-none">
              <span>
                Login
              </span>
                
            </a>';
                        }

                        ?>
                        <a href="" class="text-decoration-none">
                            <span>
                                Add to cart
                            </span>

                        </a>

                    </div>
                </div>
            </nav>
        </header>
	<!-- box -->
    <?php
                $id = $_GET['id'];
                include 'db.php';
                $query = "SELECT * from  `books` where id=$id";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($result)
    ?>
  <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="<?= 'books/'.$row['image'] ?>" width="300" height="400" /> </div>
                            <div class="thumbnail text-center">  </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            
                            <div class="mt-4 mb-3"> <span class="text-uppercase tex/t-muted brand"></span>
                                <h4 class="text-uppercase"><?= $row['name'] ?></h4>
                                <h5 class="text-uppercase"><?= $row['author'] ?></h5>
                               
                            </div>
                            <p class="about"><?= substr($row['description'],0,240) ?></p>
                            
                            <div class="cart mt-4 align-items-center btn-box"> <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <button class="btn btn-danger text-uppercase mr-2 px-4">Download</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
    











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>