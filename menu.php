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
                  <ul class="nav navbar-nav">
                    <li><a href="/web_cttproject/">HOME</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LAPTOP<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <?php
                                $query = "SELECT * FROM sys_menu_laptop order by label_brand";
                                $result = mysqli_query($dbc, $query);

                                while ($nav = mysqli_fetch_assoc($result)) { ?>
                                        <li <?php if ($label == $nav['id']) { echo ' class="active"'; }?>><a href="<?php echo $nav['link'];  ?>?page=<?php echo $nav['id'];?>"><?php echo $nav['label_brand']; ?></a></li>
                                        <li role="separator" class="divider"></li>
                                <?php }
                            ?>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRINTER<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <?php
                          $query = "SELECT * FROM sys_menu_printer order by label_brand";
                          $result = mysqli_query($dbc, $query);

                          while ($nav = mysqli_fetch_assoc($result)) { ?>
                                  <li><a href=<?php echo $nav['link'];  ?>><?php echo $nav['label_brand']; ?></a></li>
                                  <li role="separator" class="divider"></li>
                          <?php }
                      ?>
                      </ul>
                    </li>
                    <li><a href="/web_cttproject/accesoris.php">ACCESSORIS</a></li>
                    <li><a href="#">SPAREPART</a></li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" id="myBtn"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3><a href="#"><i class="glyphicon glyphicon-user"></i></a> Sign in!</h3>
                                  </div>
                                  <div class="modal-body">
                                    <form action="#" method="post" class="form" role="form">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <input type="password" class="form-control" name="password"
                                              placeholder="Enter Password">
                                          </div>
                                      </div>
                                      <button class="btn btn-lg btn-default btn-block" type="submit">
                                          Sign in</button>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                    <p>Not a member? <a href="#">Sign Up</a></p>
                                    <p>Forgot <a href="#">Password?</a></p>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <script>
                          $(document).ready(function(){
                              $("#myBtn").click(function(){
                                  $("#myModal").modal();
                              });
                          });
                        </script> 
                    </li>
                    <li><a href="shoppingcart.html" data-toggle="tooltip" data-placement="bottom" title="Your Shopping Cart">
                      <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
    </div>
 </div><!--end of menu-->