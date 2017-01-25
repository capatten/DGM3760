<html>
<head>
	<title>PHP Email Handler</title>
	<?php
	   //set variables
	   $emailFirstName = $_POST['emailFrm_FirstName'];
	   $emailLastName = $_POST['emailFrm_LastName'];
	   $emailAddress = $_POST['emailFrm_EmailAddress'];
	   $emailReason = $_POST['emailFrm_Reason'];
	   $emailAgreeToTerms_bool = $_POST['emailFrm_agreeToTerms'];

	   //set content of email and header data
	   $email_content = "Hi my name is $emailFirstName $emailLastName.\n".
	   "I am requesting an email response because $emailReason and would like an Email back at this address: $emailAddress" ;
	   $email_from = "From: assignment1@example.com";
	   $email_to = 'pattenchada@gmail.com';
	   $email_subject = 'Email Test';

	   //execute mail
	   mail($email_to, $email_subject, $email_content, $email_from);
	?>
</head>
<body>
	<h2>Thank you!</h2>
	<p>Your email has been sent. We will be contacting you shortly!</p>
</body>
</html>