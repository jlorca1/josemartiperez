<?php 
require ("../../../sistem/nav.php");
require ("../../../sistem/link.php");
require ("../../../sistem/pie.php");
require ("../../../sistem/config.php");
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Colegio José Martí Pérez - Coquimbo</title>

   <?php  
        link_css();
    ?>
    <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='../unitegallery/js/unitegallery.min.js'></script>  

    <link rel='stylesheet' href='../unitegallery/css/unite-gallery.css' type='text/css' />
    
    <script type='text/javascript' src='../unitegallery/themes/default/ug-theme-default.js'></script>
    <link rel='stylesheet'        href='../unitegallery/themes/default/ug-theme-default.css' type='text/css' />

<body>

    <!-- Navigation -->
    <?php  
        nav();
    ?>


    <!-- Page Content -->
    <div class="container" >

        <!-- Page Heading/Breadcrumbs -->
        
        <h1 style="margin-top: 20px">Nuestro colegio</h1>
       <hr>
       
            <div id="gallery" style="display:none;" >
    
        <img alt="Preview Image 1"
             src="DSC02920.JPG"
             data-image="DSC02920.JPG"
             data-description="Preview Image 1 Description">
        
        <img alt="Preview Image 2"
             src="DSC02920.JPG"
             data-image="DSC02920.JPG"
             data-description="Preview Image 2 Description">

        
             
        <img alt="Preview Image 11"
             src="DSC02924.JPG"
             data-image="DSC02924.JPG"
             data-description="Preview Image 11 Description">

        <img alt="Preview Image 11"
             src="DSC02926.JPG"
             data-image="DSC02926.JPG"
             data-description="Preview Image 11 Description">

             <img alt="Preview Image 11"
             src="DSC02927.JPG"
             data-image="DSC02927.JPG"
             data-description="Preview Image 11 Description">
        <img alt="Preview Image 11"
             src="DSC02929.JPG"
             data-image="DSC02929.JPG"
             data-description="Preview Image 11 Description">
        <img alt="Preview Image 11"
             src="DSC02930.JPG"
             data-image="DSC02930.JPG"
             data-description="Preview Image 11 Description">
        <img alt="Preview Image 11"
             src="DSC02931.JPG"
             data-image="DSC02931.JPG"
             data-description="Preview Image 11 Description">
             
    </div>
    <p></p>
    <p></p>
    
    <script type="text/javascript">

        jQuery(document).ready(function(){

            jQuery("#gallery").unitegallery();

        });
        
    </script>



    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <?php  
        pie_pag();
            ?>
        <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    



</body>

</html>
