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
			<div class="col-xs-12 col-md-4 col-md-offset-4">
				<form action="../../controllers/addNew.php" method="POST">
					<div class="row">
						<div class="col-xs-12">
							<label for="f_name" class="form-label">First Name</label>
							<input id="f_name" name="f_name" class="form-control" value="<?php if(isset($_POST['f_name'])){ echo $_POST['f_name']; }; ?>" />
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12">
							<label for="l_name" class="form_label">Last Name</label>
							<input id="l_name" name="l_name" class="form-control" value="<?php if(isset($_POST['l_name'])){ echo $_POST['l_name']; }; ?>"/>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12">
							<label for="email" class="form-label">Email Address</label>
							<input id="email" name="email" class="form-control" value="<?php if(isset($_POST['l_name'])){ echo $_POST['email']; }; ?>"/>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12">
							<label for="department" class="form-label">Department</label>
							<select id="department" name="department" class="form-control">
								<option selected disabled>-- Select Department --</option>
								<?php 
									while($row = mysqli_fetch_array($result_departments)){
										echo '<option value="'. $row["department_id"] .'">'.$row["department_desc"] . '</option>';
									};
								?>
							</select>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12">
							<label for="status" class="form-label">Status</label>
							<select id="status" name="status" class="form-control">
								<option selected disabled>-- Select Status --</option>
								<?php 
									while($row = mysqli_fetch_array($result_status)){
										echo '<option value="'. $row["status_id"] .'">'.$row["status_desc"] . '</option>';
									}
								?>
							</select>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12">
							<label for="title" class="form-label">Title</label>
							<select id="title" name="title" class="form-control">
								<option selected disabled>-- Select Title --</option>
								<?php 
									while($row = mysqli_fetch_array($result_titles)){
										echo '<option value="'. $row["title_id"] .'">'.$row["title_desc"] . '</option>';
									}
								?>
							</select>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-6 pull-right">
							<button type="submit" id="submit" name="submit" class="form-control pull-right btn btn-success">Add Employee</button>
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