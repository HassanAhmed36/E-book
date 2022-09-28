<div class="hero_area">
        <!-- header section strats -->
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
                          


                            

                            <?php
                            if ($_SESSION['email'] == 'admin@gmail.com') {
                                echo '<li class="nav-item">
                <a class="nav-link" href="add.php">add book</a>
              </li>';
                            }

                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>

                        </ul>
                    </div>
                    <div class="quote_btn-container">

                        <?php
                        if (@$_SESSION['email']) {
                            echo '<a href="logout.php">
              <span>
                Logout
              </span>
                
            </a>';
                        } else {
                            echo ' <a href="login.php">
              <span>
                Login
              </span>
                
            </a>';
                        }

                        ?>
                        <a href="">
                            <span>
                                Add to cart
                            </span>

                        </a>

                    </div>
                </div>
            </nav>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        
        <!-- end slider section -->
    