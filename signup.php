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
            $successmsg = "Successfully Registered! <a href='login.php'> Click here to Login</a>";
        } 
        else 
        {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
    

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
</head>

<body>

<div class="container-customss">
    <div class="row-custom">
        <div class="col-md-4 well well-sm well-custom">
            <legend><a href="#"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
            <form action="#" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="firstname" placeholder="First Name" type="text"
                        required value="<?php if($error) echo $firstname; ?>"> 

                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                </div>
                <div class="col-xs-6 col-md-6">
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
                <div class="col-xs-4 col-md-4">
                    <input class="form-control"  type="datetime" id="example1">
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
<div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        Already Registered? <a href="login.php">Login Here</a>
        </div>
    </div>
    
</div>

 <!-- Load jQuery and bootstrap datepicker scripts -->
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () { 
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                   
                });  
                   
            });
        </script>
</body>
</html>
