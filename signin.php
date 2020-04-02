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
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Library Management System</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/lightbox.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
  </head>
  <body>
  <h1 style="text-align: center;">Library Management System</h1>
    <div class="container login-container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-3"></div>
        <div class="col-md-6 login-form-1">
          <h3>Sign In</h3>
          <form method="post" action="">
            <div class="form-group">
              <input type="text" class="form-control" name ="user"
              placeholder="Users Id *" value="<?php if(@$_COOKIE["hatirla"]=='1') echo @$_COOKIE["kid"]; ?>"
              />
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password"
              placeholder="Password *" value="<?php if(@$_COOKIE["hatirla"]=='1') echo @$_COOKIE["sifre"]; ?>"
              />
            </div>
            <div>
              <input type="radio" id="huey" name="reme" value="huey" />
              <label for="huey">Register Me</label>
            </div>
            <div class="col-md-6 form-group">
              <input type="submit" class="btnSubmit" value="Login" name="signin" />
            </div>
            <div class="col-md-6 form-group">
              <a href="signup.php"><input type="button" class="btnSubmit" value="Sign up" name="signup" /></a>
            </div>
            <div class="col-md-6 form-group">
              <a href="index.php"><input type="button" class="btnSubmit" value="Home" name="home"/></a>
            </div>
            <?php
                      //This code run when click sign in button.
                        if(@$_POST["signin"]){
                            $user=$_POST["user"];
                            $password=$_POST["password"];
                            $reme=$_POST["reme"];
                            //if draw data user and password, run this code.
                            if($user && $password){
                              //Php send query to database.
                                $sql = mysqli_query($conn, "select count(*) as kulvar from users where user_kid='$user' and user_pass='$password' ");
                                while($satir=mysqli_fetch_array($sql))
                                {
                                  //İf there is user in database, php keep to number of user.
                                    $giriskontrol=$satir['kulvar'];
                                }
                           
                                //İf giriskontrol bigger than 0, this code run and user sign in.
                                if($giriskontrol>0){
                                  echo "Signed In!"; 
                                  //İf user mark remember box, php keep time of user. if don't mark php define cookie information of userid and userpassword.
                                    if($reme){ $zaman=(86400 * 30);
                                     $hatirla=1;
                                    }else{
                                     $zaman=(86400 / 6);
                                     $hatirla=0; }
                                     setcookie("kid", $user, time() + $zaman); 
                                     setcookie("sifre",$password, time() + $zaman); 
                                     setcookie("giris", 1, time() + $zaman);
                                     setcookie("hatirla", $hatirla, time() + (86400 * 30));
                                     header("Refresh: 1; url=index.php"); 
                                    }else{ echo 
                                      "Username or password is wrong"; 
                                    } 
                              }else{ echo "Please fill in all fields!"; 
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
