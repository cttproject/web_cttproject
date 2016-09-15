<?php include ("config_mb/configure_mb.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Circle Table Tech.</title>

    <!-- CSS-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
      <!--end of menu-->
      <?php include("menu.php")?>
	 <div class="accessories container">
	 	<div class="selection col-md-2">
	 		<div class="list-group">
                            <p class="list-group-item active">
                                Pilih Accessories
                            </p>
                            <?php
                                $query = "SELECT * FROM sys_menu_accesoris order by label_cat";
                                $result = mysqli_query($dbc, $query);

                                while ($nav = mysqli_fetch_assoc($result)) { ?>
                                    <a href="<?php echo $nav['link'];  ?>?page=<?php echo $nav['id'];?>"
                                       class="list-group-item"><?php echo $nav['label_cat']; ?></a>
                                <?php }
                            ?>
			</div>
		</div>
	 	<div class="col-md-10">
	 		<div class="row">
	 		  <div class=" title col-md-12 text-center">
		 		<h1>ACCESSORIES</h1>
		 	  </div>
                            <?php
                            $query = "select * from sys_product";
                            $result = mysqli_query($dbc, $query);
                            
                            while ($product =  mysqli_fetch_assoc($result)){?>
                                <div class="col-sm-6 col-md-4 text-center">
                                    <div class="thumbnail">
                                      <img src="images/product/crop_top1.jpg">
                                      <div class="caption">
                                        <h3><?php echo $product['label']; ?></h3>
                                        <p><?php echo $product['price']; ?></p>
                                        <p><a href="#" class="btn btn-primary" role="button">Detail</a>
                                        <a href="#" class="btn btn-primary" role="button">Beli</a></p>
                                      </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
			  			  
			</div>
		</div>
	 </div><!--end of laptop-->

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
	 </div><!--end of footerbot-->
 </div><!--end of container-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>