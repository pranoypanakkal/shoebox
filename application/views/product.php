<!DOCTYPE html> 

<html lang="en">
    
    <head>
		<link href="http://localhost/shoebox/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/ionicons.min.css">
	    <link href="http://localhost/shoebox/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="http://localhost/shoebox/assets/js/simpleCart.min.js"></script>
        <script src="http://localhost/shoebox/assets/js/jquery-2.1.4.min.js"></script>
		<script src="http://localhost/shoebox/assets/js/bootstrap.min.js"></script>
		<script src="http://localhost/shoebox/assets/js/imagezoom.js"></script>
		<script defer src="http://localhost/shoebox/assets/js/jquery.flexslider.js"></script>
        <link rel="stylesheet" href="http://localhost/shoebox/assets/css/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/resources/css/query.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/normalize.css">
        <script>
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
          </script>
          
        <title>Product Details</title>
    </head>
    
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="http://localhost/shoebox/assets/css/images/logo.png" alt="Footprints Logo" class="logo">
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
                        <li><a href="http://localhost/shoebox/index.php/cart"><i class="ion-android-cart"></i></a></li>
                    </ul>
                    <ul class="main-nav-logo">
                        <form><li><input name="search" id="search" placeholder="Search"></li><li><a href="#"><i class="ion-search"></i></a></li></form>
                        <li><a href="index.html"><i class="ion-home"></i></a></li>
                        <li><a href="#"><i class="ion-male"></i></a></li>
                        <li><a href="#"><i class="ion-female"></i></a></li>
                        <li><a href="#"><i class="ion-happy"></i></a></li>
                        <li><a href="signup.html"><i class="ion-person-add"></i></a></li>
                        <li><a href="signin.html"><i class="ion-person"></i></a></li>
                        <li><a href="cart.html"><i class="ion-android-cart"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header> 
        <div class="check">
         <div class="showcase-grid">
            <div class="container">
                <div class="col-md-8 showcase">
                    <div class="flexslider">
                          <ul class="slides">
                            <li data-thumb="http://localhost/shoebox/assets/css/images/show.jpg">
                                <div class="thumb-image"> <img src="http://localhost/shoebox/assets/css/images/show.jpg" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="http://localhost/shoebox/assets/css/images/show1.jpg">
                                 <div class="thumb-image"> <img src="http://localhost/shoebox/assets/css/images/show1.jpg" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="http://localhost/shoebox/assets/css/images/show2.jpg">
                               <div class="thumb-image"> <img src="http://localhost/shoebox/assets/css/images/show2.jpg" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="http://localhost/shoebox/assets/css/images/show3.jpg">
                               <div class="thumb-image"> <img src="http://localhost/shoebox/assets/css/images/show3.jpg" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                          </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 showcase">
                    <div class="showcase-rt-top">
                        <div class="pull-left shoe-name">
                            <h3>Nike Air Max 2015</h3>
                            <p>Men's running shoes</p>
                            <h4>&#36;190</h4>
                        </div>
                        <div class="pull-left rating-stars">
                            <ul>
    <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <hr class="featurette-divider">
                    <div class="shocase-rt-bot">
                        <div class="float-qty-chart">
                        <ul>
                            <li class="qty">
                                <h3>Size Chart</h3>
                                <select class="form-control siz-chrt">
                                  <option>6 US</option>
                                  <option>7 US</option>
                                  <option>8 US</option>
                                  <option>9 US</option>
                                  <option>10 US</option>
                                  <option>11 US</option>
                                </select>
                            </li>
                            <li class="qty">
                                <h4>QTY</h4>
                                <select class="form-control qnty-chrt">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                </select>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        </div>
                        <ul>
                            <li class="ad-2-crt simpleCart_shelfItem">
                                <a class="btn item_add" href="#" role="button">Add To Cart</a>
                                <a class="btn" href="#" role="button">Buy Now</a>
                            </li>
                        </ul>
                    </div>
                    <div class="showcase-last">
                        <h3>product details</h3>
                        <ul>
                            <li>Internal bootie wraps your foot for a sock-like fit</li>
        <li>Unique eyestays work with the Flywire cables to create an even better glove-like fit</li>
                            <li>Waffle outsole for durability and multi-surface traction</li>
        <li>Sculpted Cushlon midsole combines plush cushioning and springy resilience for impact protection</li>
                            <li>Midsole flex grooves for greater forefoot flexibility</li>
                        </ul>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
        </div>
        </div>
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