<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Assignment 3</title>
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
        	<nav class="navbar navbar-default" role="navigation">            
                <div class="container">
                    <!-- holds navigation toggle button for smaller screens and brand anchor(s) -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <span class="brandTitle">Assignment 3</span>
                        </a> <!-- /.navbar-brand -->
                    </div> <!-- /.navbar-header -->
                </div><!--/#navbar -->
            </nav>
        </div><!-- /.navigationBar -->

        <div class="container">
        	<form id="sendSpam_frm" name="newsletter_frm" action="triggerSpam.php" method="post">
        		<div class="row">
	        		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
	        			<label for="sendSpam_Subject">Subject:</label>
	        			<input type="text" id="sendSpam_Subject" name="sendSpam_Subject" class="form-control" value="" />
	        		</div>
	        	</div>
	        	
	        	<div class="row">
	        		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
	        			<label for="sendSpam_Message">Last Name:</label>
	        			<textarea id="sendSpam_Message" name="sendSpam_Message" class="form-control" value=""></textarea>
	        		</div>
	        	</div>
	        	
	        	<div class="row">
	        		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
	        			<button type="submit" id="sendSpam_sbmt" name="sendSpam_sbmt" class="btn btn-primary pull-right">Send</button>
	        		</div>
	        	</div>
        	</form>

        </div> <!-- /.container -->
        
        <footer>
          <div class="container">
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
