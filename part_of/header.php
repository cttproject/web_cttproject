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
    <link href="css/customnews.css" rel="stylesheet">
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
<header class="container">
    <div class="col-md-6 col-sm-6">
        <ul class="nav nav-pills">
            <li role="presentation"><a href="index.php?tentang_kami">About Us</a></li>
            <li role="presentation"><a href="index.php?kontak_kami">Contact Us</a></li>
            <li role="presentation"><a href="index.php?online_shop">Online Shop</a></li>
        </ul>
    </div>
    <div class="col-md-6 col-sm-6">
        <form class="navbar-form navbar-right">
            <div class="form-group">
                <input id="searchId" type="text" class="form-control" placeholder="Search">
            </div>
            <input type="button" onclick="location.href=getKey();" value="Search" class="btn btn-default"/>
        </form>
    </div>
</header><!--end of header-->

<div class="brand container">
    <div class="container font col-md-6">
        <div class="col-md-3">
            <a href="index.php?home"><img src="images/logo web2.png"></a>
        </div>
        <div class="col-md-9">
            <h1>CIRCLE TABLE TECH.</h1>
            <h4>Terupdate, Aktual, dan Terpercaya</h4>
        </div>
    </div>
    <div class="col-md-6"></div>
</div><!--end of brand-->
<script type="text/javascript">
    function getKey(){
        var textInputVal = document.getElementById('searchId').value;
//        alert(textInputVal);
        return 'index.php?search='+textInputVal;
    }
</script>