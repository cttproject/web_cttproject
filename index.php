<?php include ("config_mb/configure_mb.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $site_title ?></title>

    <!-- CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <header>
  	<div class="container">
  		<div class="col-md-12">
  			<p>Welcome to our online store</p>
  		</div>
  	</div> 
  </header><!--end of header-->

  <div class="container">
	  <div class="menu container">
	 		<div class="col-md-2">
	 			<a href="#"><img src="images/logo.png"></a>
	 		</div>
	 		<div class="col-md-10">
	 			<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <span class="navbar-brand visible-xs-block">Navigation &rarr;</span>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li><a href="#">HOME</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LAPTOP<span class="caret"></span></a>
				          <ul class="dropdown-menu">
                                              <?php
                                                    $query = "SELECT * FROM sys_menu_laptop";
                                                    $result = mysqli_query($dbc, $query);

                                                    while ($nav = mysqli_fetch_assoc($result)) { ?>
                                                            <li><a href=<?php echo $nav['link'];  ?>><?php echo $nav['label_brand']; ?></a></li>
                                                            <li role="separator" class="divider"></li>
                                                    <?php }
                                                ?>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRINTER<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">HP</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">EPSON</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">XEROX</a></li>
				          </ul>
				        </li>
				        <li><a href="#">ACCESSORIS</a></li>
				        <li><a href="#">SPAREPART</a></li>
				      </ul>
				      <form class="navbar-form navbar-left">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default">Submit</button>
				      </form>
				      <ul class="nav navbar-nav navbar-right">
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-placement="bottom" title="Sign In or Sign Up"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Sign In</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Sign Up</a></li>
				          </ul>
				        </li>
				        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Your Shopping Cart">
				        	<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
	 		</div>
	 </div><!--end of menu-->

	 <div class="banner container">
	 	<div class="col-md-12 banner2">
	 		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="images/banner1.jpg" alt="...">
			      <div class="carousel-caption">
			        New Brand
			      </div>
			    </div>
			    <div class="item">
			      <img src="images/banner1.jpg" alt="...">
			      <div class="carousel-caption">
			         New Brand
			      </div>
			    </div>
			    <div class="item">
			      <img src="images/banner1.jpg" alt="...">
			      <div class="carousel-caption">
			         New Brand
			      </div>
			    </div>
			    ...
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
	 	</div>
	 </div><!--end of banner-->

	 <div class="product container">
	 	<div class=" title col-md-12 text-center">
	 		<h1>NEW PRODUCTS</h1>
	 	</div>
	 	<div class="row">
		  <div class="col-sm-6 col-md-3 text-center">
		    <div class="thumbnail">
		      <img src="images/product/crop_top1.jpg">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-primary" role="button">Detail</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3 text-center">
		    <div class="thumbnail">
		      <img src="images/product/crop_top1.jpg">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-primary" role="button">Detail</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3 text-center">
		    <div class="thumbnail">
		      <img src="images/product/crop_top1.jpg">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-primary" role="button">Detail</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3 text-center">
		    <div class="thumbnail">
		      <img src="images/product/crop_top1.jpg">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-primary" role="button">Detail</a></p>
		      </div>
		    </div>
		  </div>
		</div>
	 </div><!--end of product-->

	 <div class="services container">
	 	<div class="col-md-12 text-center title">
        <h1>WHY BUY FROM US?</h1>
      </div>
      <div class="row ">
        <div class="col-md-4 text-center">
          <div class="panel panel-default">
            <div class="panel-body">
              <span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
              <h3>Free Shipping</h3>
              <p>If you buy > Rp.300,000</p>
            </div>
          </div>
        </div><!--end of services 1-->
        <div class="col-md-4 text-center">
          <div class="panel panel-default">
            <div class="panel-body">
              <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
              <h3>Cheap</h3>
              <p>Cheaper than the existing online store.</p>
            </div>
          </div>
        </div><!--end of services 2-->
        <div class="col-md-4 text-center">
          <div class="panel panel-default">
            <div class="panel-body">
              <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
              <h3>Secure Shopping</h3>
              <p>The transaction and delivery of safe.</p>
            </div>
          </div>
        </div><!--end of services 3-->
      </div>
	 </div><!--end of services-->

	 <div class="latespost container">
	 	<div class="col-md-12 text-center title">
	 		<h1>OUR REVIEW</h1>
	 	</div>
	 	<div class="row">
	 		<center>
		 		<div class="col-md-6 post">
				 	<div class="col-md-6">
				 		<img class="img-responsive" src="images/img1.jpg">
				 	</div>
				 	<div class="col-md-6">
				 		<small>01-01-2016</small>
				 		<p>Neque porro quisquam est qui</p>
				 		<p class="plast">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				 	</div>
		 		</div>
	 		</center>
	 		<center>
		 		<div class="col-md-6 post">
		 			<div class="col-md-6">
		 				<img src="images/img2.jpg">
		 			</div>
		 			<div class="col-md-6">
		 				<small>01-01-2016</small>
		 				<p>Neque porro quisquam est qui</p>
		 				<p class="plast">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		 			</div>
		 		</div>
	 		</center>	
	 	</div>
	 	<div class="row allpost">
	 		<div class="col-md-12 text-center">
	 			<button type="button" class="btn btn-default">ALL REVIEW</button>
	 		</div>
	 	</div>
	 </div><!--end of latestpost-->

	 <footer class="container">
	 	<div class="col-md-3">
	 		<img src="images/logo.png">
	 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
	 	</div>
	 	<div class="col-md-6">
	 		<div class="col-md-4 list">
	 			<p>INFORMATION</p>
	 			<ul>
	 				<li><a href="">ABOUT US</a></li>
	 				<li><a href="">CONTACT US</a></li>
	 				<li><a href="">ORDER AND RETURN</a></li>
	 				<li><a href="">HOW TO ORDER</a></li>
	 				<li><a href="">LOREM IPSUM</a></li>
	 			</ul>
	 		</div>
	 		<div class="col-md-4 list">
	 			<p>WHY BUY FROM US</p>
	 			<ul>
	 				<li><a href="">FREE SHIPPING</a></li>
	 				<li><a href="">CHEAP</a></li>
	 				<li><a href="">SECURE SHOPPING</a></li>
	 			</ul>
	 		</div>
	 		<div class="col-md-4 list">
	 			<p>MY ACCOUNT</p>
	 			<ul>
	 				<li><a href="">SIGN IN</a></li>
	 				<li><a href="">VIEW CART</a></li>
	 				<li><a href="">MY WHISLIST</a></li>
	 				<li><a href="">TRACK MY ORDER</a></li>
	 				<li><a href="">LOREM IPSUM</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 	<div class="col-md-3">
	 		<div class="panel panel-default">
	            <div class="panel-body">
		            <div class="col-md-12">
				 		<p>NEW LETTER</p>
				 		<div class="row">
				 			<form class="navbar-form navbar-left">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="">
								</div>
								<button onclick="window.alert('Success')" type="submit" class="btn btn-default">GO!</button>
							</form>
						</div>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<a href="#">
						<span class="social social-facebook" aria-hidden="true"></span>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<span class="social social-facebook"></span>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<span class="social social-facebook"></span>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#">
						<span class="social social-facebook"></span>
					</a>
				</div>
			</div>
	 	</div>
	 </footer><!--end of footer-->

	 <div class="footerbot container">
	 	<p>Circle Table Tech. &copy; 2016</p>
	 </div>
 </div><!--end of footerbot-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<!--<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $site_title ?></title>
<link href="home.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="pembungkus">
	   <header>
            <div class="headerLeft">
            	<p>YOUR LANGUAGE: ENGLISH</p>
                <p>CURRENCY: USD</p>
            </div>
            <div class="headerRight">	
            	<p>WELCOME TO OUR ONLINE STORE</p>
            </div>
        </header>end of header
    </div>
    <div class="container">
        <menu>
            <div class="container2">
        	    <div class="bagMenu1">
            	   <img src="images/logo.png">
                </div>
                <div class="bagMenu2">
            	   <ul>
                       <?php
                            $query = "SELECT * FROM sys_menus";
                            $result = mysqli_query($dbc, $query);

                            while ($nav = mysqli_fetch_assoc($result)) { ?>
                                    <li><a href=""><?php echo $nav['label']; ?></a></li>
                            <?php }
                        ?>

                    </ul>
                </div>
                <div class="bagMenu3">
            	    <img src="images/search.png">
                    <img src="images/account.png">
                    <img src="images/keranjang.png">
                </div>
            </div>
        </menu>end of menu
        <div class="banner">
        	<div class="banner1"> 
            	<img src="images/banner1.jpg">
            </div>
            <div class="banner2">
            	<div class="banner2Left">
                <img src="images/banner2.jpg">
                </div>
                <div class="banner2Right">
                	<img src="images/banner3.jpg">
                </div>
            </div>
            <div class="banner3">
            	<img src="images/banner4.jpg">
            </div>
            <div class="banner4">
            	<div class="banner4Left">
                	<img src="images/banner5.jpg">
                </div>
                <div class="banner4Right">
                	<div class="banner4rightTop">
                    	<div class="banner4righttopLeft">
                            <div class="font">
                        	    <p id="p1">FREE SHIPPING</p>
                                <p id="p2">ON ORDER OFFER $99</p>
                                <p id="p3">THIS OFFER IS VALID ON ALL OUR STORE ITEMS.</p>
                            </div>
                        </div>
                        <div class="banner4righttopRight">
                            <div class="font">
                        	    <p id="p4">COD</p>
                                <p id="p5">CASH ON DELIVERY</p>
                            </div>
                        </div>
                    </div>
                    <div class="banner4rightBot">
                    	<div class="banner4rightbotLeft">
                            <div class="font">
                        	    <p id="p6">ORDER RETURN</p>
                                <p id="p7">RETURN WITHIN 14 DAYS</p>
                            </div>
                        </div>
                        <div class="banner4rightbotRight">
                            <div class="font">
                        	    <p id="p8">75% OF</p>
                                <p id="p9">SHOP NOW!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> end of banner
        <div class="product">
            <p class="p1">NEW PRODUCTS</p>
        	   <div class="product1">
                    <img src="images/product/blazer.jpg">
                    <img src="images/product/crop_top1.jpg">
                    <img src="images/product/flar_jeans1.jpg">
                    <img src="images/product/flared_jeans1.jpg">
                </div>
            <P class="p1">SPECIAL PRODUCTS</P>
                <div class="product2">
            	    <img src="images/product/linen_shirt.jpg">
                    <img src="images/product/pocket_trouser.jpg">
                    <img src="images/product/spirit_jeans1.jpg">
                    <img src="images/product/square_pocket_jeans.jpg">
            </div>
        </div> end of product
        <div class="quote">
            <div class="pembungkus2">
        	   <div class="quoteLeft">
                    <div class="left">
            	       <img src="images/list-img-1.png">
                    </div>
                    <div class="right"> 
                        <p>" Guys, you rock! Made a purchase at your store recently. The order has been shipped and delivered on time. The quality is superb! The price is quite reasonable. Told all my friends about your excellent service and the variety of choice. I think I’ll be your loyal customer in future as well. I wish your store many more years of prosperity. "</p>
                    </div>
                </div>
                <div class="quoteRight">
                    <div class="left">
            	       <img src="images/list-img-2.png">
                    </div>
                    <div class="right">
                        <p>" Having the distressing experience with some online shops before decided to say ‘’THANK YOU” to all personnel of this store. You are not only friendly, but deliver really good products in the shortest possible terms. In a word, I am absolutely happy with my purchase and the service. Everything was perfect! "</p>
                    </div>
                </div>
            </div> 
        </div> end of quote
        <div class="latespost">
            <P id="p1">LATEST POSTS</P>
        	<div class="latespostTop">
            	<div class="posttopLeft">
                    <div class="left">
                	   <img src="images/small_1.jpg">
                    </div>
                    <div class="right">
                        <p>18.08.2015</p>
                        <p>IMPACT - THE HEART OF BUSINESS</p>
                        <p>Thousands of people dream of having their own business and even more so be a successful entrepreneur.</p>
                        <p>COMMENTS...</p>
                    </div>
                </div>
                <div class="posttopRight">
                    <div class="left">
                	   <img src="images/small_2.jpg">
                    </div>
                    <div class="right">
                        <p>18.08.2015</p>
                        <p>BELIVE IN THE BUSINESS OF YOUR DREAMS</p>
                        <p>What is stopping you from believing in the business of your dreams?</p>
                        <p>COMMENTS...</p>
                    </div>
                </div>
            </div>
            <div class="latespostBot">
            	<tr>
            		<td>
            			<input type="submit" value="VIEW ALL POST">
            		</td>
                </tr>
            </div>
        </div> end of latepost
        <footer>
        	<div class="footer1">
            	<img src="images/logo.png">
                <p>The variety of products available at our store at the moment is vast, but we still continue to widen our assortment. We monitor the relevant market niche on regular basis to keep our prices competitive. Buying form us you can be sure that you’ll get the product you have offered quickly and hassle-free. We value our reputation of the trustworthy merchant and never upset our clients.</p>
            </div>
            	<div class="footer2">
            		<div class="footer2Center">
                            <p>INFORMATION</p>
                            <p>ABOUT US</p>
                            <p>CUSTOMER SERVICE</p>
                            <p>TEMPLATES SETTING</p>
                            <p>PRIVACY POLICY</p>
                            <p>SITE MAP</p>
                            <p>SEARCH TERMS</p>
                            <p>ADVANCED SEARCH</p>
                            <p>ORDER AND RETURNS</p>
                            <p>CONTACT US</p>
                	</div>
                        <div class="footer2Center">
                            <p>WHY BUY FROM US</p>
                            <p>SHIPPING AND RETURNS</p>
                            <p>SECURE SHOPPING</p>
                            <p>INTERNATIONAL SHIPPING</p>
                            <p>AFFILIATES</p>
                            <p>GROUP SALES</p>
                        </div>
                	<div class="footer2Center">
                            <p>MY ACCOUNT</p>
                            <p>SIGN IN</p>
                            <p>VIEW CART</p>
                            <p>MY WISHLIST</p>
                            <p>TRACK MY ORDER</p>
                            <p>HELP</p>
                	</div>
            	</div>
            <div class="footer1">
                <div class="footerRight1">
            	    <tr>
                	   <td><p>NEWSLETTER</p></td>
                    </tr>
                    <tr>
                        <td><input type="text" value="" name=""></td>
                        <td><input type="submit" value="GO!"></td>
                    </tr>
                </div>
                <div class="footerRight2">
                    <img src="images/twitter.png">
                    <img src="images/facebook.png">
                    <img src="images/google+.png">
                    <img src="images/youtube.png">
                </div>
            </div>
        </footer> end of footer
        <hr>
        <div class="footer3">
            <p>Copyright &copy; Circle Table Tech 2016.</p>
        </div>
    </div>
</body> end of body
</html>
<!DOCTYPE html>

To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>-->
