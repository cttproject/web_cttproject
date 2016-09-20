                                
<?php
//check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $password = mysqli_real_escape_string($dbc, $_POST['password']);
    $result = mysqli_query($dbc, "SELECT * FROM sys_signup WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['name'];
        header("Location: index.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
?>





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