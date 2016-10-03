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

	 <?php include ("footer.php")?><!--get Footer.php-->
 </div><!--end of container-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>