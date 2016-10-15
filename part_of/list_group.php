<div class="selection">
    <div class="list-group">
        <p class="list-group-item active">
            Trending Topic
        </p>
        <?php
        $query = "select * from sys_news";
        $result = mysqli_query($dbc, $query);

        while ($nav = mysqli_fetch_assoc($result)) { ?>
            <a href="#" class="list-group-item"><?php echo $nav['judul'] ?></a>
        <?php }
        ?><!--end of new update-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Pad</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Acc</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
<!--        <a href="#" class="list-group-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>-->
    </div>
</div>