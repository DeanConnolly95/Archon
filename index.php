<?php
    require "core/head.php";
    include "core/navbar.php";
?>
    <div class="container">

        <!-- SPACER DIV (LEFT) !-->
        <div class="col-md-2"></div>

        <!-- CONTENT DIV (CENTER) !-->
        <div class="col-md-8">
            <?php
                include "interfaces/main.php";
            ?>
        </div>

        <!-- SPACER DIV (RIGHT) !-->
        <div class="col-md-2"></div>
    </div>