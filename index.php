<?php
session_start();
include_once ("config_mb/configure_mb.php");
?>

<?php

include "part_of/header.php";
include "part_of/menu.php";

?>

<div class="content container">
    <?php

    if (isset($_GET['hot_news'])){
        include "pages/hot_news.php";
    } elseif (isset($_GET['old_news'])){
        include "pages/old_news.php";
    } elseif (isset($_GET['tentang_kami'])){
        include "pages/tentang_kami.php";
    } elseif (isset($_GET['kontak_kami'])){
        include "pages/kontak_kami.php";
    } elseif (isset($_GET['online_shop'])){
        echo "<h1>COMING SOON!!!</h1>";
    } else {
        include "pages/home.php";
    }

    ?>
</div><!--end of content-->

<footer class="container">
    <?php
        include "part_of/footer.php";
    ?>
</footer>





	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>