<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Encuesta - Percepción URT</title>

		<?php echo $this->tag->getTitle(); ?>

		<!-- <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/> -->
		<link rel="shortcut icon" href="https://www.restituciondetierras.gov.co/favicon.ico" />

		<!-- <?php echo $this->tag->stylesheetLink('http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'); ?> -->
		<!-- <?php echo $this->tag->stylesheetLink('http://fonts.googleapis.com/css?family=Montserrat:400,700'); ?> -->
		<?php echo $this->tag->stylesheetLink('bower_components/bootstrap/dist/css/bootstrap.css'); ?>
		<?php echo $this->tag->stylesheetLink('bower_components/font-awesome/css/font-awesome.min.css'); ?>
		<?php echo $this->tag->stylesheetLink('bower_components/ionicons/css/ionicons.min.css'); ?>
		<?php echo $this->tag->stylesheetLink('css/jQueryUI/jquery-ui-1.10.3.custom.min.css'); ?>

		<?php echo $this->tag->javascriptInclude('bower_components/jquery/dist/jquery.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('bower_components/jquery-ui/jquery-ui.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('js/AdminLTE/app.js'); ?>

	</head>
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

		<?php echo $this->getContent(); ?>

	</body>
</html>

<script language="Javascript">
	document.oncontextmenu = function(){return false}
</script>