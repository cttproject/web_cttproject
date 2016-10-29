<div class="menu container">
    <div class="col-md-3 col-sm-1"></div>
    <div class="col-md-6 col-sm-10">
        <nav class="navbar navbar-default">
            <div>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand visible-xs-block"><p>Menu &rarr;</p></span>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php?home">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="index.php?news">News</a></li>
                        <li><a href="index.php?education">Education</a></li>
                        <li><a href="index.php?gadget">Gadget</a></li>
                        <li><a href="index.php?games">Games</a></li>
                        <li><a href="index.php?photograph">Photograph</a></li>
                    </ul>
                    <form class=" search navbar-form navbar-right visible-xs">
                        <div class="form-group disabled">
                            <input id="searchId" type="text" class="form-control" placeholder="Search">
                        </div>
                        <input type="button" onclick="location.href=getKey();" value="Search" class="btn btn-default"/>
                    </form>
                </div><!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->

        </nav>
    </div>
    <div class="col-md-3 col-sm-1"></div>
</div><!--end of menu-->
<script type="text/javascript">
    function getKey(){
        var textInputVal = document.getElementById('searchId').value;
        alert(textInputVal);
//        return 'index.php?search='+textInputVal;
    }
</script>