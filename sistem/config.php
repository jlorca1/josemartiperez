<?php 

function base_url(){

$url="http://josemartiperez.cl/v2/";
$url="http://localhost/jose/";
return $url;

}

function link_css(){

	?>
<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="icon" href="<?php echo base_url();?>public/images/favicon.ico">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css/modern-business.css" rel="stylesheet">

	<?php
}


function link_js(){

	?>
	<!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<?php
}

function link_js_contac(){

	?>
	<!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
	<?php
}