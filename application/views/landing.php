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
        <title>FOOTPRINTS</title>
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
                        <li><a href="http://localhost/shoebox/index.php/navbar/navbar/cart"><i class="ion-android-cart"></i></a></li>
                    </ul>
                </div>
            </nav>
          <!--  <div class="hero-text-box">
            <h1>Be a TrendSetter!</h1>
            </div>
          -->    
        </header>
        <section class="section-features">
            <div class="row">
                <h2>Be a TrendSetter!</h2>
                <p class="long-copy">
                   The best of global brands, at your doorstep!  
                </p>
            </div>
            <div class="row">
                <div class="col span-1-of-2">
                    <i class="ion-heart icon-big"></i>
                    <h3>Only The Best</h3>
                    <p>All categories with unreasonable offers</p>
                </div>
                <div class="col span-1-of-2">
                    <i class="ion-ios-pulse-strong icon-big"></i>
                    <h3>Get Trendy With The Latest</h3>
                    <p>Popular categories that people are shopping for right now.</p>
                </div>
            </div>
        </section>
        
        <section class="section-shoes">
            <ul class="shoes-showcase">
                <li>
                    <figure class="shoes-photo">
                        <img src="http://localhost/shoebox/assets/resources/images/one.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="shoes-photo">
                        <img src="http://localhost/shoebox/assets/resources/images/two.jpg">    
                    </figure>
                </li>
                <li>
                    <figure class="shoes-photo">
                        <img src="http://localhost/shoebox/assets/resources/images/eight.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="shoes-photo">
                        <img src="http://localhost/shoebox/assets/resources/images/five.jpg">
                    </figure>
                </li>
            </ul>
            <ul class="shoes-showcase">
                <li>
                    <figure class="shoes-photo">
                        <img src="http://localhost/shoebox/assets/resources/images/four.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="shoes-photo">
                        <img src="http://localhost/shoebox/assets/resources/images/six.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="shoes-photo">
                        <img src="http://localhost/shoebox/assets/resources/images/seven.jpg">
                    </figure>
                </li>
                <li>
                    <figure class="shoes-photo">
                        <img src="http://localhost/shoebox/assets/resources/images/three.jpg">
                    </figure>
                </li>
            </ul>
        </section>
        
        <section class="section-testimonials">
            <div class="row">
                <h2>The People Behind Footprints</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-5">
                    <blockquote>Pranoy's our all rounder. Helping out with both the front and back ends of the site, he's a crucial part of the team. Well versed in HTML, CSS, SQL, he brings something great to the group.</blockquote>
                    <cite>Pranoy Paul</cite>
                </div>
                <div class="col span-1-of-5">
                    <blockquote>Every development team needs a strong back end developer and that for us, is Aasif. Thorough in php, bootstrap, SQL, HTML and Photoshop, he has a clear idea of what  looks good where.</blockquote>
                    <cite>Aasif Faizal</cite>
                </div>
                <div class="col span-1-of-5">
                    <blockquote>Sid's no stranger to website design either. A strong programmer , fluent in multiple e-languages and also familiar with HTML , CSS and SQL, he was responsible for most of the front end development.</blockquote>
                    <cite>Sidharth Manoj</cite>
                </div>
                <div class="col span-1-of-5">
                    <blockquote>What's a team without someone to pen down thoughts and ideas and write the content of the site? And that someone would be me Parvathy. She also helped with the database part of the site (SQL, HTML) and the front end development, including logo design.</blockquote>
                    <cite>Parvathy TR</cite>
                </div> 
                <div class="col span-1-of-5">
                    <blockquote>Last but never the least,we have Meenakshi. She puts her own creative spin to everything she does and whatever she does, she does well. She was indispensable to the team, by providing ideas and helping out with front end development. (SQL, HTML)  Co creator of the logo.</blockquote>
                    <cite>Meenakshi Omprakash</cite>
                </div>
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