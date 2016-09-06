<?php include ("config_mb/configure_mb.php");?>
<!doctype html>
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
        </header><!--end of header-->
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
        </menu><!--end of menu-->
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
        </div> <!--end of banner-->
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
        </div> <!--end of product-->
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
        </div> <!--end of quote-->
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
        </div> <!--end of latepost-->
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
        </footer> <!--end of footer-->
        <hr>
        <div class="footer3">
            <p>Copyright &copy; Circle Table Tech 2016.</p>
        </div>
    </div>
</body> <!--end of body-->
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
</html>
