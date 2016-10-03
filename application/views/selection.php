<!DOCTYPE html>
<html lang="en">
 
    <head> 

        <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <meta charset utf="8">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/vendors/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="http://localhost/shoebox/assets/css/form.css" rel="stylesheet" type="text/css" media="all" />
        <link href="http://localhost/shoebox/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/shoebox/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/resources/css/query.css">
        <script src="http://localhost/shoebox/assets/js/simpleCart.min.js"></script>
        <script src="http://localhost/shoebox/assets/js/jquery-2.1.4.min.js"></script>
        <script src="http://localhost/shoebox/assets/js/bootstrap.min.js"></script>
        <script src="http://localhost/shoebox/assets/js/imagezoom.js"></script>
        <script defer src="http://localhost/shoebox/assets/js/jquery.flexslider.js"></script>
        <link rel="stylesheet" href="http://localhost/shoebox/assets/css/flexslider.css" type="text/css" media="screen" />

            <script>
             $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>
    </head>
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
    <body>
        <div class="products-gallery">
           <div class="container">
               <div class="col-md-9 grid-gallery">
                    <div class="col-md-4 grid-stn simpleCart_shelfItem">
                         <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid4.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
                                        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
                    <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid6.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
                    <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid3.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
                    <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid5.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
                    <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid7.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
                    <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid8.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
                   <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid9.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
                   <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid10.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
                   <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid11.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
                   <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid12.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
                   <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid13.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
                   <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="http://localhost/shoebox/assets/css/images/grid14.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3>style 01</h3>
                                    </div>
                                    <div class="pull-right styl-price">
        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="http://localhost/shoebox/index.php/pages/product">Quick view</a>
                        </div>
                    </div>
            <div class="clearfix"></div>
                </div>
               <div class="col-md-3 grid-details">
                    <div class="grid-addon">
                    <section  class="sky-form">					 
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->					 
				 </section>
				 <section  class="sky-form">
					 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>DISCOUNTS</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						 </div>
					 </div>
				 </section> 				 
				   <!---->
					 <link rel="stylesheet" type="text/css" href="http://localhost/shoebox/assets/css/jquery-ui.css">
					<script type='text/javascript'>//<![CDATA[ 
					$(window).load(function(){
					 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 400000,
								values: [ 2500, 350000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

					});//]]>  

					</script>
					<section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Air Max (30)</label>
								</div>
								<div class="col col-4">
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Armagadon   (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Helium (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kyron     (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Napolean  (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Foot Rock   (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Radiated  (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Spiked  (30)</label>
								</div>
							</div>
				   </section>
				 <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tornado</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kissan</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Oakley</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Manga</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wega</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kings</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
								</div>
							</div>
				   </section>		
                    </div>
               </div>
            <div class="clearfix"></div>
            </div> 
        </div> 
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="aboutus.html">About Us</a> </li>
                        <li><a href="contactus.html">Contact Us</a></li>
                        <li><a href="#">Track Order</a> </li>
                        <li><a href="#">FAQ</a> </li>
                        <li><a href="#">Blog</a> </li>
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
