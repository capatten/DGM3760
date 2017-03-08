<!DOCTYPE html>
<html>
	<head>
	<meta charset="ISO-8859-1">
	<title>Employee Directory</title>
		<!--------------------------------- CSS --------------------------->
		<!-- bootstrap css -->
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/css/bootstrap-black-nav.css" rel="stylesheet"/>

		<!-- fontawesome css -->
		<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css"/>

		<!-- jqwidgets css -->
		<link rel="stylesheet" type="text/css" href="../assets/js/jqwidgets/styles/jqx.base.css"/>

		<!-- Roboto Font -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!-- index css -->
		<link rel="stylesheet" type="text/css" href="../assets/css/layout.css?<cfoutput>rand()</cfoutput>"/>

		<!--------------------------------- SCRIPTS --------------------------->
		<!--js -->
		<script src="../assets/js/jquery/jquery.min.js"></script>
		<script src="../assets/js/bootstrap/js/bootstrap.min.js"></script>

		<!-- Javascript Plugins -->
		<script language="javascript" src="../assets/js/jquery/spin.min.js"></script>
		<script language="javascript" src="../assets/js/jquery/jquery.spin.js"></script>

		<!-- Custom js -->
		<script language="javascript" src="../assets/js/index.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Employee Directory</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="active">
			        <a href="#">
				        View Directory
				        <span class="sr-only">
					        (current)
								</span>
							</a>
						</li>
		        <li><a href="#">Admin</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<!--- <cfinclude template = "../views/directory/directory.cfm"> --->
		<cfinclude template = "../views/admin/directory.cfm">

		<nav class="navbar navbar-default navbar-fixed-bottom">
		  <div class="container-fluid">
			  <div class="col-xs-12">
					<span class="pull-right"><i class="fa fa-copyright" aria-hidden="true"></i>&nbsp; Chad Patten | 2017 </span>
				</div>
		  </div>
		</nav>
	</body>
</html>