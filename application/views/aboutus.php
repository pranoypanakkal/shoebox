<!DOCTYPE html>  
<html lang="en">
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/resources/css/query.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/resources/css/query.css">
        <title>About Us</title>
    </head>
    
    <body>
        <header>
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
          <!--  <div class="hero-text-box">
            <h1>Be a TrendSetter!</h1>
            </div>
          -->    
        </header>
        <section class="section-about">
            <div class="row">
                <h1>About Us</h1>
                <p class="long-copy">
                   Looking for the perfect pair of shoes to compliment your outfit? You've come to the right place! One of the country's leading online shoe stores, we at Solemate strive to find each of you a solemate. Just give us your shoesize and any other preferences and sit back, as we search our vast closet, which includes some of the top designers like Christian Louboutin, Louie Vitton, Jimmy Choo n Miu Miu, to pick the most fabulous pair of shoes out for you! And what more, if you're not a 100% satisfied with any of our products, full cashback facility is provided. Our aim is to bring a smile on the faces of all you shoe lovers out there! And gorgeousness guaranteed.<br>If you'd like to speak shoe, contact us at the link provided below.
                </p>
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