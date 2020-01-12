<?php 
require ("sistem/nav.php");
require ("sistem/link.php");
require ("sistem/pie.php");
require ("sistem/config.php");
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cuerpo Directivo</title>

   <?php  
        link_css();
    ?>

</head>

<body>

    <!-- Navigation -->
    <?php  
        nav();
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Organigrama</h1>

        

        <div class="row">

        <img class="img-fluid rounded" src="public/images/organigrama.jpg" alt="">

        </div>


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <?php  
        pie_pag();
            ?>
        <!-- /.container -->
    </footer>

    <?php  
        link_js();
            ?>

</body>

</html>
