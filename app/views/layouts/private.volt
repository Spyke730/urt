	{{ assets.outputCss() }}
	<head>
		<meta charset="UTF-8">
		<title>Encuesta Web</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="skin-blue">

	<div class="loader"></div>
		<!-- header logo: style can be found in header.less -->
		<header class="header">
			<a href="/index.html" class="logo">
				<!-- Add the class icon to your logo image or logo icon to add the margining 
				<div class="pull-left image">
					{{ image("img/logo-01.png", "class":"img-rectangle img-responsive", "alt": "User Image") }}

				<div class="icon">
					{{ image("img/logo-01.png", "class":"img-rectangle img-responsive", "alt": "User Image") }}
				</div>

				</div> -->

				<small> Proyectamos Colombia SAS </small>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-right">
					<ul class="nav navbar-nav">
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="glyphicon glyphicon-user"></i>
								<span>{{ auth.getName() }}<i class="caret"></i></span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header bg-light-blue">
									{% if auth.getProfileid() == 1 %}
										{{ image("img/logo-01.png", "class":"img-circle", "alt": "User Image") }}
									{% else %}
										{{ image("img/logo-01.png", "class":"img-circle", "alt": "User Image") }}
									{% endif %}
									<p>
										{{ auth.getName() }}
									</p>
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-right">
										{{ link_to("session/logout", "Salir", "class": "btn btn-default btn-flat") }}
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="wrapper row-offcanvas row-offcanvas-left">
			<!-- Left side column. contains the logo and sidebar -->
			
			{% if auth.getProfileid() == 1 %}

				<aside class="left-side sidebar-offcanvas">
					<!-- sidebar: style can be found in sidebar.less -->
					<section class="sidebar">
						<!-- Sidebar user panel -->
						<div class="user-panel">
							<div class="pull-left image">
								{{ image("img/logo-01.png", "class":"img-circle", "alt": "User Image") }}
							</div>
							<div class="pull-left info">
								</br>
								<a href="/dashboard/index"><i class="fa fa-circle text-success"></i> Online</a>
							</div>
						</div>
						<!-- sidebar menu: : style can be found in sidebar.less -->
						<ul class="sidebar-menu">
							{%- set menu_1 = [
								'Encuesta'    : 'encuesta',
								'Informe'     : 'informe'
							] -%}

							{%- for key, value in menu_1 %}
								{% if value == dispatcher.getControllerName() %}
								<li class="active">{{ link_to(value, key) }}</li>
								{% else %}
								<li>{{ link_to(value, key) }}</li>
								{% endif %}
							{%- endfor -%}
						</ul>
						<div class="user-panel">
							<div class="panel-body">
								<table class="table">
									<tr>
										<th COLSPAN=3 class="text-center"><h5>Encuesta WEB</h5></th>
									</tr>
									<tr>
										<td style="vertical-align:middle;"><i class="fa fa-smile-o"></i></td>
										<td><label>Enc. registradas : </label></td>
										<td style="vertical-align:middle;"><small class="badge pull-right bg-green">{{ cntUrt }}</small></td>
									</tr>
									<tr>
										<td style="vertical-align:middle;"><i class="fa fa-warning"></i></td>
										<td><label>Enc. x registrar : </label></td>
										<td style="vertical-align:middle;"><small class="badge pull-right bg-red">{{ urtTotal - cntUrt }}</small></td>
									</tr>
								</table>
							</div>
						</div>

					</section>
					<!-- /.sidebar -->
				</aside>
			{% endif %}


			<!-- Right side column. Contains the navbar and content of the page -->
			<aside class="right-side">
				{{ content() }}
			</aside><!-- /.right-side -->
		</div><!-- ./wrapper -->

	</body>

	<!-- Footer -->
	<footer>
		<div class="container text-center">
			<p>2015 &copy;
			  {{ link_to("http://www.proyectamoscolombia.com.co/", "Proyectamos Colombia SAS") }} </p>
		</div>
	</footer>
	{{ assets.outputJs() }}