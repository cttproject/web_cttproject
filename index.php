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

    if (isset($_GET['news'])){
        include "pages/news.php";
    } elseif (isset($_GET['education'])){
        include "pages/education.php";
    } elseif (isset($_GET['gadget'])){
        include "pages/gadget.php";
    } elseif (isset($_GET['games'])){
        include "pages/games.php";
    } elseif (isset($_GET['photograph'])){
        include "pages/photograph.php";
    } elseif (isset($_GET['single_page'])){
        include "pages/single_page.php";
    } elseif (isset($_GET['tentang_kami'])){
        include "pages/tentang_kami.php";
    } elseif (isset($_GET['kontak_kami'])){
        include "pages/kontak_kami.php";
    } elseif (isset($_GET['online_shop'])){
        echo "<h1>COMING SOON!!!</h1>";
    } elseif (isset($_GET['search'])){
        include "pages/home.php";
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