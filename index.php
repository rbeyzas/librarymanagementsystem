<html lang="tr">
<?php 
//This php line code draw data in connect.php.
require_once("inc/connect.php"); 
$pagenum=1; ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Library Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/lightbox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <!-- Boostrap css--
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        --End Boostrap css-->

        
    </head>

    <body>
        <!--Navbar-->
        <!-- Header -->
        <div class="home-header">
        <!--This php line code draw data in header.php.-->
        <?php include("theme/header.php"); ?>
        </div>
        <!-- End Header -->
        <!--End Navbar-->
        <!-- Slider -->
        <header class="intro">
    <div class="intro-slideshow">
      <img src="assets/img/slider/slider1.jpeg">
      <img src="assets/img/slider/slider2.jpeg">
      <img src="assets/img/slider/slider3.jpeg">
      <img src="assets/img/slider/slider4.jpeg">
      <img src="assets/img/slider/slider5.jpeg">
    </div>
    <div class="intro-header">
      <h1>E-LİBRARY</h1>
      <p>Library Management System</p>
    </div>
  </header>
       

       <div class="readbooks-line"></div>
        <div class="readbooks-title">
            Most Read Books
        </div>
        <!-- Most Read Books -->
        
        <section class="books">         
            <div class="readbooks-slider">
            <div class="owl-carousel owl-theme" id="subject">
                    
                <?php

                    $cat_id=5;
                    //This code send query to database and show book when cat_id=5 in database.
                    $sql = mysqli_query($conn, "select * from books where book_cat='$cat_id' ");
                    while($satir=mysqli_fetch_array($sql))
                    { ?>
                    <div class="item">
                    <!-- Php embedded in these lines is draw data about book information in database -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 subject-image">
                            <img src="<?=$satir["book_image"]?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 subject-desc">                                           
                            <div class="subject-title">
                            <?=$satir["book_name"]?><br>
                            </div>
                            <div class="desc">
                                <p><b>Author:<?=$satir["book_author"]?></b></p>
                                <?=$satir["book_desc"]?>

                            </div>  
                            <div>
                            <!-- This code keep information about bookid and bookname and send information when click button to reservation.php. -->
                            <button type="button" class="btn btn-warning"><a href="reservation.php?id=<?=$satir["book_id"]?>&bookname=<?=$satir["book_name"]?>">Make a Reservation</a></button>
                            </div>   
                                    
                        </div>
                    </div>

           
        <?php }

        ?>  
                        </div> 
                    </div>  
                    <div class="end-line"></div>
                </section>
        <!-- End Most Read Books -->
        <!-- Counters -->
        <section class="counters" onscroll="Onscrollfnction();">
            <div class="panel clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 fixing-image">
                    <img src="assets/img/count.jpeg">
                    <div class="fixing-image-title">
                        <h1 class="counter">15.000</h1>
                        <p class="count-text">Books</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 fixing">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 fixing-title">
                        <h1 class="counter">1236</h1>
                        <p class="count-text ">Reader</p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 video">
                         <video width="100%" height="auto" controls>
                           <source type="video/mp4" src="assets/video/LibraryPomotionalVideo.mp4" allowfullscreen="true"> </source> 
                        </video>                  
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </section>  
        <!-- End Counters -->
        <!-- Contact -->
        
        <section class="iletisim">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 contact-title">
                <div class="title">Contact</div>
                <div class="line"></div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 contact-detail">
                <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">                 
                    <div class="phone">
                        <div class="icon">
                            <i class="fa fa-phone"></i> 
                        </div>
                        <p>0538 785 18 51</p>
                    </div>
                    <div class="phone">
                        <div class="icon">
                            <i class="fa fa-phone"></i> 
                        </div>
                        <p>0 530 279 07 51</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <div class="mail">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <p> rukiyebeyzasarikaya@hotmail.com</p>                          
                    </div> 
                    <div class="mail">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <p>cagrihd@icloud.com</p>                          
                    </div>                
                </div>

                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i> 
                    </div>
                    <p>
                      ADANA
                    </p>     
                </div>
            </div>
            <div class="col-xs-12 footer-social-media">
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </section>
        <!-- End Contact -->
     
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.nicescroll.min.js"></script>
        <script>
            $(function () {
               /* $('#homeSlider').owlCarousel({
                    loop: true,
                    dots: false,
                    margin: 0,
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    animateIn: 'fadeIn',
                    animateOut: 'fadeOut'
                });*/
                 $('#subject').owlCarousel({
                    loop: true,
                    dots: false,
                    margin: 40,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1280:{
                            items:3
                        }
                    },
                    navSpeed:2000,
                    autoplay: true,
                    autoplaySpeed: 2700,
                    autoplayTimeout: 4000,
                    navText: ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    animateIn: 'fadeIn',
                    animateOut: 'fadeOut'
                });
            })
        </script>
        <script src="assets/js/custom.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>
    </body>
</html>