<div class="news">
    <div class="col-md-8">
        <?php
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $query = "select * from sys_news where id=$id";
            $result = mysqli_query($dbc, $query);

            while ($nav = mysqli_fetch_assoc($result)) { ?>
                <h2><?php echo $nav['judul']; ?></h2>
                    <div class="berita">
                        <p><?php echo $nav['date']; ?></p>
                        <img class="img-responsive col-md-8" src="images/img1.jpg">
                        <div class="font1">
                            <p><?php echo $nav['isi_berita']; ?></p>
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