<html lang="tr">
<?php 
//This php line code draw data in connect.php.
require_once("inc/connect.php"); 

$pagenum=3; 

//Keeping information by button assign to variable.
$bookid=@$_GET["id"];
$bookname=@$_GET["bookname"];
if($bookid){
    
    $rezervebook;
    $counter=0;
    //This code send query to sql and find book_id in database.
    $sql = mysqli_query($conn, "select * from books where book_id='$bookid' ");
    while($satir=mysqli_fetch_array($sql))
    {
        $counter=1;
    break;
    }

   //if there is not book, this code send index.php.
    if($counter==0){
        header("Location: index.php");
        exit();
    }


}else{
    // there is not id this code is run.
    header("Location: index.php");
    exit();    
}



?>
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

    </head>

    <body>
        <!-- Header -->
        <div class="header">
        <!--This php line code draw data in header.php.-->
        <?php include("theme/header.php"); ?>
        </div>

        <!-- Make A Reservation -->
        <section class="reservation" id="reservation">
            <div class="reservation-container">
                <div class="col-md-12 reservation-big-title">
                    Make A Reservation
                </div>
                <div class="col-md-12 reservation-desc">     
                <div class="col-lg-6 intro_col">
					<div class="intro_form_container">
                        <p>-Once you have selected the book you want to book, you will be redirected to this page.</p>
                        <p>-You have to fill in the name e-mail and date</p>
                        <p>-If you do not fill in these fields, your reservation request will not be made!</p>
                        <p>-The date section indicates how long you will keep the book</p>
                        <p>-Please deliver the book on time!</p>
                        <p>Enjoyable readings!</p>
						<div class="intro_form_title">Make A Reservation</div>
						<form action="" method="post" class="intro_form" id="intro_form">
							<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
                                                                                                            <!-- This php code keep cookie information about user sign id-->
								<input type="text" name="name" class="intro_input" placeholder="İsim"  value="<?=@$_COOKIE['kid']?>">
								<input type="email" name="email" class="intro_input" placeholder="E-mail" >
								<input type="text" name="date" id="datepicker" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="intro_input datepicker" placeholder="Date">
							</div>
                            <input type="submit" value="Rezervasyon Yap" name="signup"/>

                            <?php
                                //if user make a reservation, this php code reserve book and save to database.
                                if($_POST){
                                    //Php is controlling to user don't fill all blank or user fill all blank.
                                    if($_POST['name'] && $_POST['date'] && $_POST['email']){
                                        //And then if user fill all blank, php add to database.
                                        $sql = "INSERT INTO reservation (r_name, r_date, r_email, r_bookid, r_bookname) VALUES 
                                        ('".$_POST['name']."', ".$_POST['date'].", '".$_POST['email']."', ".$_GET['id'].", '".$_GET["bookname"]."')";
                                        //if sql query is successful or unsuccessful, php show a message.
                                        if (mysqli_query($conn, $sql)) {    
                                            echo "Registration completed!";
                                        } else {
                                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                        }
                                        //End of the operation, database close.
                                        mysqli_close($conn);  
                                    }else{

                                    echo "Please fill in all fields!"; 

                                    }

                                
                                }
                                

                            ?>
						</form>
					</div>
				</div>
                </div>                        
            </div>
        </section>
        <!-- End Make A Reservation -->
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
                        <p>rukiyebeyzasarikaya@hotmail.com</p>                          
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
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.nicescroll.min.js"></script>
        <script src="assets/js/custom.js"></script>
        

        
    </body>
</html>