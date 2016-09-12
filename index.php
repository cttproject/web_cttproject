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
    <link href="css/bootstrap.css" rel="stylesheet">
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
	  <?php include("menu.php")?>
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
                    <?php   
                        $query = "select * from sys_product";
                        $result = mysqli_query($dbc, $query);
                        
                        while ($nav = mysqli_fetch_assoc($result)) { ?>
                            <div class="col-sm-6 col-md-3 text-center">
                                <div class="thumbnail">
                                  <img src="images/product/crop_top1.jpg">
                                  <div class="caption">
                                    <h3><?php echo $nav['label']; ?></h3>
                                    <p><?php echo $nav['price']; ?></p>
                                    <p><a href="#" class="btn btn-primary" role="button">Detail</a>
                                    <a href="#" class="btn btn-primary" role="button">Beli</a></p>
                                  </div>
                                </div>
                            </div>
                        <?php }
                    ?>
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
         
	 <?php include ("footer.php")?><!--get Footer.php-->
         
 </div><!--end of footerbot-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>