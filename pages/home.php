<?php
    if (!isset($_GET['search'])){
        ?>
        <div class="banner">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/banner1.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>HOT NEWS</h3>
                            <p><a href="">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/banner1.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>HOT NEWS</h3>
                            <p><a href="">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/banner1.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>HOT NEWS</h3>
                            <p><a href="">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div><!--end of banner-->
        <?php
    }
?>

<div class="news">
    <div class="col-md-8">
        <?php
            if (isset($_GET['search'])){
                $searchKey = $_GET['search'];
                ?>
                <h2>Search Result</h2>
                <?php   
                    $query = "SELECT * FROM sys_news WHERE judul LIKE '%$searchKey%'";
                    $result = mysqli_query($dbc, $query);

                    while ($nav = mysqli_fetch_assoc($result)) { ?>
                        <div class="berita row">
                            <img class="img-responsive col-md-8" style="max-width: 250px;" 
                                 src="images/img1.jpg">
                            <p><?php echo $nav['date']; ?></p>
                            <div class="font1">
                                <h3><a id="<?php echo $nav['id']; ?>" href="index.php?single_page&id=<?php echo $nav['id']; ?>"><?php echo $nav['judul']; ?></a></h3>
                                <p><?php echo $nav['sinopsis']; ?></p>
                            </div>
                        </div>
                    <?php }
            } else {
                ?>
                <h2>ALL NEWS</h2>
                <?php   
                    $query = "select * from sys_news";
                    $result = mysqli_query($dbc, $query);

                    while ($nav = mysqli_fetch_assoc($result)) { ?>
                        <div class="berita row">
                            <img class="img-responsive col-md-8" style="max-width: 250px;" 
                                 src="images/img1.jpg">
                            <p><?php echo $nav['date']; ?></p>
                            <div class="font1">
                                <h3><a id="<?php echo $nav['id']; ?>" href="index.php?single_page&id=<?php echo $nav['id']; ?>"><?php echo $nav['judul']; ?></a></h3>
                                <p><?php echo $nav['sinopsis']; ?></p>
                            </div>
                        </div>
                    <?php }
            }
        ?><!--end of new update-->
<!--        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>end of pagination-->
    </div>
    <div class="col-md-4 trending">
        <?php
        include "part_of/list_group.php";

        ?>
    </div><!--end of old news-->
</div><!--end of news-->