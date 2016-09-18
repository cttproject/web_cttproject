<?php 
session_start();
include_once ("config_mb/configure_mb.php");
?>


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
	  <div class="menu container">
                <div class="col-md-2">
                        <a href="/web_cttproject/"><img src="/web_cttproject/images/logo.png"></a>
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
                              <ul class="col-md-6 nav navbar-nav">
                                <li><a href="#">News</a></li>
                                <li><a href="/web_cttproject/">Shopping Area</a></li>
                                <li><a href="/web_cttproject/">Contact Us</a></li>
                              </ul>
                              <form class="col-md-6 navbar-form navbar-right">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                              </form>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                </div>
             </div><!--end of menu-->
      
	 <div class="latespost container">
	 	<div class="col-md-12 title">
                    <h1 class="col-md-12">Headline Updates</h1>
	 	</div>
	 	<div class="row">
                    <div class="col-md-12 headline">
                            <div class="col-md-6">
                                    <img class="img-responsive" src="images/img1.jpg">
                            </div>
                            <div class="col-md-6">
                                    <small>01-01-2016</small>
                                    <p>Neque porro quisquam est qui</p>
                                    <p class="plast">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                    </div>
                    <div class="post">
                        <div class="col-md-8 post-white">
                           <div class="col-md-4 img-padding">
                                    <img class="img-responsive" src="images/img1.jpg">
                            </div>
                            <div class="col-md-8">
                                    <small>01-01-2016</small>
                                    <p>Neque porro quisquam est qui</p>
                                    <p class="plast">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div> 
                        </div>
                    </div>
                    <div class="post">
                        <div class="col-md-8 post-white">
                           <div class="col-md-4 img-padding">
                                    <img class="img-responsive" src="images/img1.jpg">
                            </div>
                            <div class="col-md-8">
                                    <small>01-01-2016</small>
                                    <p>Neque porro quisquam est qui</p>
                                    <p class="plast">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div> 
                        </div>
                    </div>	
	 	</div>
	 	<div class="row allpost">
	 		<div class="col-md-12 text-center btn-padd-bottom post-white">
	 			<button type="button" class="btn btn-default">More</button>
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