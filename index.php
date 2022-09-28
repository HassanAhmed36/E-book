<?php
session_start();
if (!@($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location: login.php');
    exit;
}





?>


<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>E-book - <?php echo $_SESSION['email'] ?></title>


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

</head>

<body>

   <?php include 'nav.php'?>
   <section class="slider_section long_section m-0" style="background-color: white ;">
            <div id="customCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container my-5 "  >

                            <div class="row mt-5 pt-5">
                                <div class="col-md-5 mt-5 py-t">
                                    <div class="detail-box">
                                        <h1>
                                            For All Your <br>
                                            E-Books Needs
                                        </h1>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem
                                            maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                                        </p>
                                        <div class="btn-box">

                                            <a href="book.php" class="btn2">
                                                View More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="img-box" >
                                        <img src="images/newsilder.png" alt="" style="width:20rem; height:15rem; margin-left:15rem;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
</div>

    <!-- furniture section -->

    <section class="furniture_section layout_padding">
        <div class="container">
            <div class="heading_container text-center">
                <h2 class="text-center">Books</h2>
            </div>
            <div class="row">
                <?php
                include 'db.php';
                $query = "SELECT * from  `books`";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class='col-md-6 col-lg-4'>
                        <div class='box' style="width:250px">
                            <div class='img-box m-0 '>
                                <img src="<?='books/'.$row['image']  ?>" alt='' class="w-80">
                            </div>
                            <div class='detail-box'>
                                <a href="/ebook/details.php?id=<?=$row['id']?>"><h5>
                                    <?=$row['name'] ?>
                                </h5></a>
                                <div class='price_box' style='color: black !important;'>
                                    
                                    <a href=''>
                                        more detail
                                    </a>
                                </div>
                            </div>
                </div>
                    </div>
                <?php
                }
                ?>








            </div>
        </div>
    </section>

    <?php include 'footer.php'?>
    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>