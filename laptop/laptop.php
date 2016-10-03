<?php 
include ("../config_mb/configure_mb.php");
include ("../config_mb/get_menu_laptop_label.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Circle Table Tech.</title>

    <!-- CSS-->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
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
        <?php include("../menu.php") ?>
	 <div class="laptop container">
	 	<div class="selection col-md-2">
	 		<div class="list-group">
				<p class="list-group-item active">
				    Pilih Prosesor
				</p>
				<a href="#" class="list-group-item">Intel i7</a>
				<a href="#" class="list-group-item">Intel i5</a>
				<a href="#" class="list-group-item">Intel i3</a>
				<a href="#" class="list-group-item">Coreduo</a>
			</div>
			<div class="list-group">
				<p class="list-group-item active">
					Kisaran Harga
				</p>
				<a href="#" class="list-group-item">1jt < 3jt</a>
				<a href="#" class="list-group-item">3jt < 6jt</a>
				<a href="#" class="list-group-item">6jt < 9jt</a>
				<a href="#" class="list-group-item">9jt < ....</a>
			</div>
		</div>
	 	<div class="col-md-10">
	 		<div class="row">
	 		  <div class=" title col-md-12 text-center">
                              <h1>
                                  <?php
                                  echo get_label($dbc, $label)['label_brand'];
                                  ?>
                              </h1>
		 	  </div>
			  <div class="col-sm-6 col-md-3 text-center">
			    <div class="thumbnail">
			      <img src="../images/product/crop_top1.jpg">
			      <div class="caption">
			        <h3>Thumbnail label</h3>
			        <p>...</p>
			        <p><a href="#" class="btn btn-primary" role="button">Detail</a></p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3 text-center">
			    <div class="thumbnail">
			      <img src="../images/product/crop_top1.jpg">
			      <div class="caption">
			        <h3>Thumbnail label</h3>
			        <p>...</p>
			        <p><a href="#" class="btn btn-primary" role="button">Detail</a></p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3 text-center">
			    <div class="thumbnail">
			      <img src="../images/product/crop_top1.jpg">
			      <div class="caption">
			        <h3>Thumbnail label</h3>
			        <p>...</p>
			        <p><a href="#" class="btn btn-primary" role="button">Detail</a></p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3 text-center">
			    <div class="thumbnail">
			      <img src="../images/product/crop_top1.jpg">
			      <div class="caption">
			        <h3>Thumbnail label</h3>
			        <p>...</p>
			        <p><a href="#" class="btn btn-primary" role="button">Detail</a></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
				    	<h4 class="panel-title">
				        	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Collapsible Group Item #1
				        	</a>
				        	<button type="button" class="btn btn-default btn-xs">View</button>
				        	<button type="button" class="btn btn-default btn-xs">Beli</button>
				      	</h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				</div>
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingTwo">
				      	<h4 class="panel-title">
				        	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Collapsible Group Item #2
				        	</a>
				        	<button type="button" class="btn btn-default btn-xs">View</button>
				        	<button type="button" class="btn btn-default btn-xs">Beli</button>
				      	</h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				</div>
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Collapsible Group Item #3
				        </a>
				        <button type="button" class="btn btn-default btn-xs">View</button>
				        <button type="button" class="btn btn-default btn-xs">Beli</button>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				</div>
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingFour">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          Collapsible Group Item #4
				        </a>
				        <button type="button" class="btn btn-default btn-xs">View</button>
				        <button type="button" class="btn btn-default btn-xs">Beli</button>
				      </h4>
				    </div>
				    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				</div>
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingFive">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				          Collapsible Group Item #5
				        </a>
				        <button type="button" class="btn btn-default btn-xs">View</button>
				        <button type="button" class="btn btn-default btn-xs">Beli</button>
				      </h4>
				    </div>
				    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				</div>
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingSix">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
				          Collapsible Group Item #6
				        </a>
				        <button type="button" class="btn btn-default btn-xs">View</button>
				        <button type="button" class="btn btn-default btn-xs">Beli</button>
				      </h4>
				    </div>
				    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				</div>
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingSeven">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
				          Collapsible Group Item #7
				        </a>
				        <button type="button" class="btn btn-default btn-xs">View</button>
				        <button type="button" class="btn btn-default btn-xs">Beli</button>
				      </h4>
				    </div>
				    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				</div>
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingEight">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
				          Collapsible Group Item #8
				        </a>
				        <button type="button" class="btn btn-default btn-xs">View</button>
				        <button type="button" class="btn btn-default btn-xs">Beli</button>
				      </h4>
				    </div>
				    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				</div>
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingNine">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
				          Collapsible Group Item #9
				        </a>
				        <button type="button" class="btn btn-default btn-xs">View</button>
				        <button type="button" class="btn btn-default btn-xs">Beli</button>
				      </h4>
				    </div>
				    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				</div>
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingTen">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
				          Collapsible Group Item #10
				        </a>
				        <button type="button" class="btn btn-default btn-xs">View</button>
				        <button type="button" class="btn btn-default btn-xs">Beli</button>
				      </h4>
				    </div>
				    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				</div>
			</div>
		</div>
	 </div><!--end of laptop-->
             <?php include("../footer.php") ?><!--get Footer.php-->
 </div><!--end of footerbot-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>