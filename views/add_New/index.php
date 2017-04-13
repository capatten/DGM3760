<?php
	require_once('../variables.php');
	include '../../layout/head.php';
	include '../../layout/foot.php';
	
	$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
	
	// get all departments listed in table
	$query = "
		SELECT
			department_id
			,department_desc
		FROM
			llpa.ref_emp_department
		ORDER BY
			department_desc";
	
	$result_departments = mysqli_query($dbConnection, $query) or die('Query Failed');
	
	// get all titles listed in table
	$query = "
		SELECT
			title_id
			,title_desc
		FROM
			llpa.ref_title
		ORDER BY
			title_desc";
	
	$result_titles = mysqli_query($dbConnection, $query) or die('Query Failed');
	
	// get all status_ids listed in table
	$query = "
		SELECT
			status_id
			,status_desc
		FROM
			llpa.ref_status
		ORDER BY
			status_desc";
	
	$result_status = mysqli_query($dbConnection, $query) or die('Query Failed');
?>
<link rel="stylesheet" type="text/css" href="../../assets/css/views/add_new/index.css"/>

<div class="index-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Add New</h1>
			</div>
		</div>
		
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
	</div>
</div>

<?php 
	mysqli_close($dbConnection);
?>