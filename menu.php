<?php

session_start();

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
            $successmsg = "Successfully Registered! <a href='signin.php'> Click here to Login</a>";
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
                                <h3><a href="#"><span class="glyphicon glyphicon-user"></span></a> Sign in!</h3>
                              </div>
                              <?php include ("signin.php") ?>
                                  <!-- Modal -->
                                  <div class="modal fade" id="myModal2" role="dialog">
                                    <div class="modal-dialog">
                                      <!-- Modal content-->
                                      <?php include ("signup.php") ?>
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