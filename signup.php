<?php 
//This php line code draw data in connect.php.
require_once("inc/connect.php"); 
//İf cookie is enable, this php line code send to index.php.
if(@$_COOKIE["giris"]=="1"){
    header("Location: index.php");
    exit();
}


?>
<html lang="tr">
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
    <h1 style="text-align: center;">Library Management System</h1>
        <div class="container login-container">
            <div class="row d-flex justify-content-center">
            <div class="col-md-3">
            </div>
                <div class="col-md-6 login-form-2">
                    <h3>Sign Up</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name ="user" placeholder="Users Id *" value="<?=@$_POST["user"]?>" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mail" placeholder="E-mail *" value="<?=@$_POST["mail"]?>" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password2" placeholder="Password Again *" value="" />
                        </div>
                        <div class="col-md-6 form-group">
                            <a href="index.php"><input type="button" class="btnSubmit" value="Home" /></a>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="submit" class="btnSubmit" value="Save" name="signup"/>
                        </div>
                        
                        <?php
                        //This code run when click sign up button.
                        if(@$_POST["signup"]){

                            $user=$_POST["user"];
                            $password=$_POST["password"];
                            $password2=$_POST["password2"];
                            $mail=$_POST["mail"];

                            /* Email and username control field */
                            $sql = mysqli_query($conn, "select count(*) as kulvar from users where user_kid='$user' or user_email='$mail' ");
                            while($satir=mysqli_fetch_array($sql))
                            {
                                $kullanicikontrol=$satir['kulvar'];
                            }
                            if(!$user || !$password || !$password2 || !$mail){
                                echo "Please fill in all fields!";
                            }else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                                echo "E-mail address is incorrect! (@ remember)";
                            }else if($password!=$password2){
                                echo "Passwords entered do not match!";
                            }else{
                                //if the user has already registered, php show a message.
                                if($kullanicikontrol>0){
                                    echo "The username or email address entered is already in use.";
                                }else{
                                    //Php send query to database and add to database of user information.
                                    $sql = "INSERT INTO users (user_kid, user_email, user_pass) VALUES ('".$user."', '".$mail."', '".$password."')";
                                    if (mysqli_query($conn, $sql)) {    
                                          echo "Registration completed!";
                                          header("Location: signin.php"); 
                                    } else {
                                          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                    }
                                    //End of the operation, database close.
                                    mysqli_close($conn);        
                                }
                            }
                        }

                    ?>                            
                    </form>
                </div>
            </div>
        </div>

     <script src="assets/js/custom.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
    </body>

</html>