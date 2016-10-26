<div class="news">
    <div class="col-md-8">
        <?php
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $query = "select * from sys_news where id=$id";
            $result = mysqli_query($dbc, $query);

            while ($nav = mysqli_fetch_assoc($result)) { ?>
                <h2><?php echo $nav['judul']; ?></h2>
                    <div class="berita row">
                        <p><?php echo $nav['date']; ?></p>
                        <img class="img-responsive col-md-8" src="images/img1.jpg">
                        <div class="font1">
                            <p><?php echo $nav['isi_berita']; ?></p>
                            <!--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>-->
                        </div>
                    </div>
            <?php }
        }
        ?>
    </div>
    <div class="col-md-4 trending">
        <?php
        include "part_of/list_group.php";

        ?>
    </div><!--end of old news-->
</div><!--end of news-->