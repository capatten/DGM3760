<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Assignment 1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- FONT AWESOME CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
        
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="css/main.css">

        <!-- JQUERY -->
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    
    <body>
        <div class="navigationBar">
        	<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Assignment 5</a>
			    </div>
			
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="navbar-collapse">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="#">Add New Profile<span class="sr-only">(current)</span></a></li>
			        <li><a href="#">Edit Profiles</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
        </div><!-- /.navigationBar -->

        <div class="container">
        	<div class="row">
        		<div class="col-xs-12">
        			<form action="addNewUser.php" method="POST" enctype="multipart/form-data">
        				<div class="row">
        					<div class="col-xs-12 col-md-6 col-lg-3">
        						<label for="frst_nm" class="form-label">First Name:</label>
        						<input id="frst_nm" name="frst_nm" class="form-control" value="" type="text" > 
        					</div>
        				</div>
        				<div class="row">
        					<div class="col-xs-12 col-md-6 col-lg-3">
        						<label for="lst_nm" class="form-label">Last Name:</label>
        						<input id="lst_nm" name="lst_nm" class="form-control" value="" type="text" > 
        					</div>
        				</div>
        				<div class="row">
        					<div class="col-xs-12 col-md-6 col-lg-3">
        						<label for="email" class="form-label">Email Address:</label>
        						<input id="email" name="email" class="form-control" value="" type="text" > 
        					</div>
        				</div>
        				<div class="row">
        					<div class="col-xs-12 col-md-6 col-lg-3">
        						<label for="gndr" class="form-label">Gender:</label>
        						<select id="gndr" name="gndr" class="form-control" value="" type="text" >
        							<option value="0" selected disabled>Select Gender</option>
        							<option value="M">Male</option>
        							<option value="F">Female</option>
        							<option value="O">Other</option>
        						</select>
        					</div>
        				</div>
        				<div class="row">
        					<div class="col-xs-12 col-md-6 col-lg-3">
        						<label for="photo" class="form-label">Add a Profile Picture:</label>	
								<input id="photo" name="photo" class="" value="" type="file" >
								<span>Image must be saved as .jpg and cropped to 150px wide X 200px tall</span>
        					</div>
        				</div>
        				<div class="row">
        					<div class="col-xs-12 col-md-6 col-lg-3">
        						<button class="btn btn-primary pull-right" type="submit">Submit</button> 
        					</div>
        				</div>
        			</form>
        		</div>
        	</div>
        </div> <!-- /.container -->
        
        <footer>
          <div class="container-fluid">
            <div class="row footerRow">
              <div class="col-xs-3 pull-right">
                <span class="copyright">&copy; Chad Patten | 2017</span>
              </div> <!-- /.col-xs-3 -->
            </div> <!-- /.footerRow -->      	
          </div> <!-- /.container -->
        </footer>
	
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script><!-- get jQuery js lib from CDN --> 
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script><!-- jQuery fallback if CDN is not available-->
    
        <script src="js/vendor/bootstrap.min.js"></script><!-- get bootstrap js lib  -->

        <script src="js/main.js"></script> <!-- get main(custom) js lib -->
    </body>
</html>
