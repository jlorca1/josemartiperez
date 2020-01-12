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

    <title>Contacto</title>

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
        <h1 class="mt-4 mb-3">Contacto</h1>

        

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1453.1826803989225!2d-71.32937150896993!3d-29.971659076787738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a09830ee9e18c3d!2zQ29sZWdpbyBKb3PDqSBNYXJ0w60gUMOpcmV6!5e0!3m2!1ses-419!2scl!4v1504490463189" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Detalle de contacto</h3>
                <p>
                    Director Lagarrigue 735, Coquimbo, 
                    <br>Región de Coquimbo
                    <br>
                </p>
                <p>
                    <i class="fa fa-phone-square" aria-hidden="true"></i>: (51) 2561323  -  (51) 2561324
                </p>
                <p>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>: <a href="mailto:c.josemartiperez@gmail.com">c.josemartiperez@gmail.com
                    </a>
                </p>
                <p>
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>: <a href="https://www.facebook.com/josemartiperezcoquimbo/" target="_blank">www.facebook.com/josemartiperezcoquimbo/
                    </a>
                </p>
                <p>
                    <i class="fa fa-hourglass-half" aria-hidden="true"></i>: Lunes - Viernes: 8:00 AM a 6:00 PM
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h3>Consultas</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nombre Completo:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telefono:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mensaje:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Enviar Consulta</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

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

        link_js_contac();
            ?>

    

</body>

</html>
