<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/resources/css/query.css">
        <title>Sign In</title>
    </head>
    <body>
        <header class="sign">
            <nav>
                <div class="row">
                    <img src="http://localhost/shoebox/assets/resources/images/logo.png" alt="Footprints Logo" class="logo">
                    <h4>SOLEMATE</h4>
                    <ul class="main-nav">
                        <form><li><input type="text" name="search" id="search" placeholder="Search"></li>
                         <li><a href="#"><i class="ion-search"></i></a></li></form>
                       <li><a href="http://localhost/shoebox/index.php/navbar/home">HOME</a></li>
                        <li><a href="http://localhost/shoebox/index.php/navbar/selection">MEN</a></li>
                        <li><a href="http://localhost/shoebox/index.php/navbar/selection">WOMEN</a></li>
                        <li><a href="http://localhost/shoebox/index.php/navbar/selection">KIDS</a></li>
                        <?php if($this->session->userdata('logged_in'))
                        { ?>
                            <li><a href="http://localhost/shoebox/index.php/navbar/logout">logout</a></li>
                           <?php }
                           else { ?>
                        <li><a href="http://localhost/shoebox/index.php/navbar/signup">SIGNUP</a></li>
                        <li><a href="http://localhost/shoebox/index.php/pages/login">SIGN IN</a></li><?php }?>
                        <li><a href="http://localhost/shoebox/index.php/navbar/cart"><i class="ion-android-cart"></i></a></li>
                    </ul>
                    <ul class="main-nav-logo">
                        <li><a href="index.html"><i class="ion-home"></i></a></li>
                        <li><a href="selection.html"><i class="ion-male"></i></a></li>
                        <li><a href="#"><i class="ion-female"></i></a></li>
                        <li><a href="#"><i class="ion-happy"></i></a></li>
                        <li><a href="signup.html"><i class="ion-person-add"></i></a></li>
                        <li><a href="signin.html"><i class="ion-person"></i></a></li>
                        <li><a href="cart.html"><i class="ion-android-cart"></i></a></li>
                    </ul>
                </div>
            </nav>
            <div class="hero-text-box signup">
                <h3>Sign In</h3>
                <div class="row">
                    <form method="post" action="http://localhost/shoebox/index.php/login" class="signup-form">
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Username</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="email" name="email" id="email" placeholder="Username(e-mail)" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Password</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="password" name="password" id="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>&nbsp;</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="submit" value="Submit">
                            </div>
                            <div>
                                <?php echo validation_errors();?> 
                            </div> 
                        </div> 
                    </form>
                </div>
            </div>
        </header>
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="http://localhost/shoebox/index.php/footer/aboutus">About Us</a> </li>
                        <li><a href="http://localhost/shoebox/index.php/footer/contactus">Contact Us</a></li>
                        <li><a href="http://localhost/shoebox/index.php/footer/faq">FAQ</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a> </li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2016 by Footprints. All rights reserved.
                </p>
            </div>
        </footer>
    </body>
</html>