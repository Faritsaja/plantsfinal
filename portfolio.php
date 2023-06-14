<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Hidroponik of Salada</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php 
 
 session_start();
  
 //if (!isset($_SESSION['username'])) {
 //    header("Location: index.php");
 //}
  
 ?>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                               
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Language Dropdown -->
                                   <!-- Login -->
                                   <div><span> <?php echo "<h5>Selamat Datang, " . $_SESSION['username'] ."! ". " </h5>"; ?></span></div>
                                <div class="logout">
                                    <a href="php/logout.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Logut</span></a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                             <!-- Navbar Start -->
                             <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                  
                            <!-- edit -->
                                    <li><a href="monitor.php">Monitor</a></li>
                                    <li><a href="monitor2.php">Control</a></li>
                                    <li><a href="portfolio.php">Reference</a></li>  
                                    <li><a href="about.php">About</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Referensi Tanaman Hidroponik</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Referensi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
    <section class="alazea-portfolio-area portfolio-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR Reference</h2>
                        <p>ini adalah Referensi kebun kami</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alazea-portfolio-filter">
                        <div class="portfolio-filter">
                            <button class="btn active" data-filter="*">All</button>
                            <button class="btn" data-filter=".design">Coffee Design</button>
                            <button class="btn" data-filter=".garden">Garden</button>
                            <button class="btn" data-filter=".home-design">Home Design</button>
                            <button class="btn" data-filter=".office-design">Office Design</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alazea-portfolio">

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item design home-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/16.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/16.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 1">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-6 single_portfolio_item garden">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/17.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/17.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 2">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item garden office-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/19.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/19.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 4">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item design office-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/20.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/20.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 5">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item garden">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/21.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/21.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 6">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-6 single_portfolio_item home-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/22.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/22.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 7">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-6 single_portfolio_item design home-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/16.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/16.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 1">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item garden">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/17.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/17.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 2">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item garden office-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/19.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/19.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 4">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item design office-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/20.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/20.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 5">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item garden">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/21.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/21.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 6">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-6 single_portfolio_item home-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/22.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/22.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 7">
                            <div class="port-hover-text">
                                <h3>Minimal Flower Store</h3>
                                <h5>Office Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Portfolio Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <p>follow kami untuk informasi lebih lanjut</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> Jl Kedunganyar Rt 18 Rw 06 Wringinanom Gresik</p>
                                <p><span>Phone:</span> +6289513704498</p>
                                <p><span>Email:</span> faritsajiwo@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>