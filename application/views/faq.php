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
        <title>FAQs</title>
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
        <section class=section-faq  >
            <div class="row">
                <h1>FAQs</h1>
                <p>
1. Can I cancel an order I've placed, and if so, how?<br>
    Ans: Yes, you can cancel a previously placed order. But only before it has been packaged at our storehouse. In case it's too late and your product has already been shipped, you can refuse it at the time of delivery and send it back to us. Full cashback will be provided, given that the product is not damaged in any way.<br>

2. How can I redeem the Shoebox points I have accumulated in my account?<br>
Ans: To redeem your points, you have to continue shopping with us on our website. In case you don't have access to it, your points will be safe and sound in your account, ready to be redeemed at any point in the future. <br>

3. What is the time taken for a refund?<br>
Ans: The refund will be initiated after we receive the item at our storehouse and it passes the quality check. The refund will be in 7-10 days after this, generally. <br>

4. Can I return multiple products from the same order? If so, how?<br>
Ans: For this, you will receive a separate return ID for each product you wish to return, via email. If you're self shipping , you can ship all the products in a single shipment. Please mention the return IDs on a single sheet of paper and place it inside the package. If the mode of return is pickup, then our courier person will come take the products from the pickup address within 5 days from date of order.<br>

5. Do you have gift cards, and if so , how can I purchase one?<br>
Ans: We don't have gift cards yet! We are working hard to introduce the concept. Check the site again in a month, please. <br>

6.  How does the COD payment option work?<br>
Ans: The Shoebox's  cash on delivery facility allows you to pay order money at the time of delivery for all orders between ₹500-₹20,000. Just select the COD option on the payment page. However, this option is available only in selected Areas. To check whether it is available in your area, type in your pincode in the space provided and click on “Check availability”. <br>

7. Can I use The Shoebox to send gifts to other people?<br>
Ans: Yes. We’re only too happy to help brighten someone else's day! For an additional charge of ₹15, you can choose to gift wrap your order by selecting the option in your shopping bag.<br>

8. Do you deliver products outside the country?<br>
Ans: No. At this point, The Shoebox only delivers within India. Sorry .<br>

9. I'm being charged VAT amount on my order. What is VAT?<br>
Ans: Value Added Tax or VAT is an indirect tax under the Indian taxation system which is levied based on consumption, by the State Governments.<br>

10. What are my payment options on The Shoebox?<br>
Ans: The different payment options we provide are :<br>
1.	Cash on delivery. ( Only selected Areas.)<br>
2.	Credit Card.<br>
3.	Debit Card.<br>
4.	Net banking. <br>

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