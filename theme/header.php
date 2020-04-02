<button class="toggle-nav" data-toggle="collapse">
                <i class="fa fa-bars"></i>
            </button>
            <div class="logo">
                <a href="index.php">
                    <img src="assets/img/logo.jpg">
                </a>
            </div>                                       
            <div class="nav">
                <ul>
                <!-- Php embedded in these lines is refers to style -->
                    <li>
                        <a <?php if($pagenum==1) { ?>style="color:#fec200;box-shadow: 0px 3px 0px #fec200;" <?php } ?> href="index.php">Home</a>
                    </li>
                    <li>
                       <button onclick="dropDownClick()" class="dropbtn" > <?php if($pagenum==2) { ?><?php } ?> All Books </button>
                       <div id="dropDown" class="dropdown-content">
                       <a href="childrenbooks.php">Children Books</a>
                       <a href="sciencefiction-fantasticbooks.php">Science Fiction-Fantastic Books</a>
                       <a href="horrorthrillerbooks.php">Horror Thriller Books</a>
                       <a href="classicbooks.php">Classic Books</a>
                      </div>
                    </li>
                    <li>
                        <a <?php if($pagenum==3) { ?>style="color:#fec200;box-shadow: 0px 3px 0px #fec200;" <?php } ?>href="reservation.php">How to Make a Reservation?</a>  <!--dropdown -->
                    </li>                    
                    <li>
                        <a <?php if($pagenum==4) { ?>style="color:#fec200;box-shadow: 0px 3px 0px #fec200;" <?php } ?> href="contact.php">Contact</a>
                    </li>
                    <li>
            <?php
            //This cookie keep to login information and show user name instead of sign in and sign up buttons. And then code show user id with welcome to... 
            if(@$_COOKIE["giris"]=="1"){
                echo "Welcome to <u>".@$_COOKIE['kid']."!</u>";
                echo ' <a href="logout.php">Log out</a>';
            }else{?>
                            <button type="button" class="btn btn-danger"><a href="signin.php">Sign In</a></button>
                                </li>
                                <li>
                            <button type="button" class="btn btn-danger"><a href="signup.php">Sign Up</a></button>
            <?php }
            ?>

                                </li>
                            
                            </ul>
                        </div>