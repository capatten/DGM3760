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
        	<nav class="navbar navbar-default" role="navigation">            
                <div class="container">
                    <!-- holds navigation toggle button for smaller screens and brand anchor(s) -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <span class="brandTitle">Assignment1</span>
                        </a> <!-- /.navbar-brand -->
                    </div> <!-- /.navbar-header -->
                    </div><!--/#navbar -->
                </div><!-- /.container -->
            </nav>
        </div><!-- /.navigationBar -->

        <div class="container">
          <form id="emailForm" name="emailForm" action="email_handler.php" method="POST"> 
            <div class="row">
              <div class="col-xs-6 col-sm-3">
                
                  <label for="emailFrm_FirstName">First Name</label>
                  <input id="emailFrm_FirstName" name="emailFrm_FirstName" class="form-control" value="" type="text">

                  <label for="emailFrm_LastName">Last Name</label>
                  <input id="emailFrm_LastName" name="emailFrm_LastName" class="form-control" value="" type="text">

                  <label for="emailFrm_EmailAddress">Email Address</label>
                  <input id="emailFrm_EmailAddress" name="emailFrm_EmailAddress" class="form-control" value="" type="text">

                  <label for="emailFrm_Reason">Email Reason</label>
                  <select id="emailFrm_Reason" name="emailFrm_Reason" class="form-control">
                    <option value="" selected disabled >Please Select an email reason</option>
                    <option value="I have nothing to do">I have nothing to do.</option>
                    <option value="I have to much to do">I have to much to do</option>
                  </select>

                  <label for="emailFrm_agreeToTerms">I agree to the terms and conditions of this service.</label>
                  <input id="emailFrm_agreeToTerms" name="emailFrm_agreeToTerms" class="form-control" value="" type="checkbox" style="width: 20px; height: 20px;">
              </div>
            </div> <!-- /.row -->

            <div class="row">
              <div class="col-xs-6 col-sm-3">
                <button id="emailForm_submit" name="emailForm_submit" type="submit" class="pull-right">Submit</button>
              </div>
            </div> <!-- /.row -->
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
