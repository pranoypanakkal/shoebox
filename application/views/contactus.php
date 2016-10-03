<!DOCTYPE html>  
<html lang="en">
    
    <head>
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/resources/css/query.css">
        <title>Contact Us</title>
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
                        <li><a href="http://localhost/shoebox/index.php/navbar/home"><i class="ion-home"></i></a></li>
                        <li><a href="http://localhost/shoebox/index.php/navbar/selection"><i class="ion-male"></i></a></li>
                        <li><a href="http://localhost/shoebox/index.php/navbar/selection"><i class="ion-female"></i></a></li>
                        <li><a href="http://localhost/shoebox/index.php/navbar/selection"><i class="ion-happy"></i></a></li>
                        <li><a href="http://localhost/shoebox/index.php/navbar/signup"><i class="ion-person-add"></i></a></li>
                        <li><a href="http://localhost/shoebox/index.php/navbar/logout"><i class="ion-person"></i></a></li>
                        <li><a href="http://localhost/shoebox/index.php/navbar/cart"><i class="ion-android-cart"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="hero-text-box signup">
            <div class="row">
                <h2>Contact Us</h2>
            </div>
            <div class="row">
                <form method="post" action="#" class="contact-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your Name" required >
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your e-Mail" required>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Message</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Enter text"></textarea>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Submit">
                        </div>  
                    </div>
                </form>
            </div>
        </section>
        <div id="popup1" class="overlay">
	       <div class="popup">
		      <h2>Social Media</h2>
		      <a class="close" href="#">x</a>
		      <div class="content">
			     <p>Connect to our social media site through this link!</p>
		      </div>
	       </div>
        </div>
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
                        <li><a href="#popup1"><i class="ion-social-facebook"></i></a> </li>
                        <li><a href="#popup1"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#popup1"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#popup1"><i class="ion-social-instagram"></i></a></li>
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