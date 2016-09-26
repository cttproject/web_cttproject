<?php

//session_start();

if(isset($_SESSION['sys_id'])) {
    header("Location: index.php");
    }
    include_once ("config_mb/configure_mb.php");

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $firstname = mysqli_real_escape_string($dbc, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($dbc, $_POST['lastname']);
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $password = mysqli_real_escape_string($dbc, $_POST['password']);
    $repassword = mysqli_real_escape_string($dbc, $_POST['repassword']);


    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$firstname)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $repassword) {
        $error = true;
        $repassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        if(mysqli_query($dbc, "INSERT INTO sys_signup(firstname,lastname,email,password) VALUES('" . $firstname . "','" . $lastname . "', '" . $email . "', '" . md5($password) . "')")) {
            $successmsg = "Successfully Registered! <a href='login.php'> Click here to Login</a>";
        } 
        else 
        {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
    
?>

<div class="menu container">
    <div class="col-md-2">
            <a href="/web_cttproject/"><img src="/web_cttproject/images/logo web2.png"></a>
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
                                <h3><a href="#"><span class="glyphicon glyphicon-user"></span></a> Sign in!</h3>
                              </div>
                              <div class="modal-body">
                                <form action="#" method="post" class="form" role="form">
                                  <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="email">Email address:</label>
                                          <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                          <label for="pwd">Password:</label>
                                          <input type="password" class="form-control" id="pwd">
                                        </div>
                                        <div class="checkbox">
                                          <label><input type="checkbox"> Remember me</label>
                                        </div>
                                        <button type="submit" class="btn btn-default btn-block btn-lg">Sign in</button>
                                      </div>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                <p>Not a member? <a href="#" id="myBtn2">Sign Up</a>
                                  <!-- Modal -->
                                  <div class="modal fade" id="myModal2" role="dialog">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3><a href="#"><span class="glyphicon glyphicon-user"></span></a> Sign up!</h3>
                                          </div>
                                          <div class="modal-body">
                                            <div class="row">
                                              <div class="col-md-12">
                                                  <form action="#" method="post" class="form" role="form">
                                                  <div class="row">
                                                      <div class="col-md-6 col-sm-6">
                                                          <input class="form-control" name="firstname" placeholder="First Name" type="text"
                                                              required value="<?php if($error) echo $firstname; ?>"> 

                                                              <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                                                      </div>
                                                      <div class="col-md-6 col-sm-6">
                                                          <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                                                      </div>
                                                  </div>
                                                  <input class="form-control" name="email" placeholder="Your Email" type="email" required value="<?php if($error) echo $email; ?>"/>
                                                  <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>

                                                  <input class="form-control" name="password" placeholder="New Password" type="password" />
                                                  <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                                                  <input class="form-control" name="repassword" placeholder="Re-Password" type="password" />
                                                  <span class="text-danger"><?php if (isset($repassword_error)) echo $repassword_error; ?></span>
                                                  <label for="">
                                                      Birth Date</label>
                                                  <div class="row">
                                                      <div class="col-md-4 col-sm-4">
                                                          <input class="form-control"  type="datetime" id="example1" placeholder="dd/mm/yyyy">
                                                      </div>
                                                      
                                                  </div>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                                                      Male
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                                                      Female
                                                  </label>
                                                  <br />
                                                  <br />
                                                  <button class="btn btn-lg btn-primary btn-block" value="Sign Up" name="signup"   type="submit">
                                                      Sign up</button>
                                                  </form>
                                                  <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
                                                  <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <div class="row">
                                              <div class="col-md-4 col-md-offset-4 text-center">    
                                              Already Registered? <a href="login.php">Login Here</a>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <script>
                                    $(document).ready(function(){
                                        $("#myBtn2").click(function(){
                                            $("#myModal2").modal();
                                        });
                                    });
                                  </script>
                                </p>
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
                    <li><a href="shopingcart.html" data-toggle="tooltip" data-placement="bottom" title="Your Shopping Cart">
                      <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
    </div>
 </div><!--end of menu-->