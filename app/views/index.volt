<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Encuesta - Percepción URT</title>

		{{ get_title() }}

		<!-- <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/> -->
		<link rel="shortcut icon" href="https://www.restituciondetierras.gov.co/favicon.ico" />

		<!-- {{ stylesheet_link('http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic') }} -->
		<!-- {{ stylesheet_link('http://fonts.googleapis.com/css?family=Montserrat:400,700') }} -->
		{{ stylesheet_link('bower_components/bootstrap/dist/css/bootstrap.css') }}
		{{ stylesheet_link('bower_components/font-awesome/css/font-awesome.min.css') }}
		{{ stylesheet_link('bower_components/ionicons/css/ionicons.min.css') }}
		{{ stylesheet_link('css/jQueryUI/jquery-ui-1.10.3.custom.min.css') }}

		{{ javascript_include('bower_components/jquery/dist/jquery.min.js') }}
		{{ javascript_include('bower_components/jquery-ui/jquery-ui.min.js') }}
		{{ javascript_include('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
		{{ javascript_include('js/AdminLTE/app.js') }}

	</head>
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

		{{ content() }}

	</body>
</html>

<script language="Javascript">
	document.oncontextmenu = function(){return false}
</script>