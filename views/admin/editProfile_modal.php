<?php
	require_once('../variables.php');
	//connect to the database
	$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');

	//build query
	$query =
	"Select * FROM emp_directory";
	
	//run Query
	$result = mysqli_query($dbConnection, $query) or die ('Query Failed');
	
	
	//display result
	while($row = mysqli_fetch_array($result)){
		if(is_null($row['profile_img'])){
			$img_name = 'default.png';
		}else{
			$img_name = $row['profile_img'];
		}
		echo '
			<form enctype="multipart/form-data" action="editSuccessful.php" method="POST">
				<div class="modal fade" id="edit_'.$row['employee_id'].'" tabindex="-1" role="dialog" data-backdrop="static">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Edit '.$row['employee_name'].'</h4>
				      </div>
				      <div class="modal-body">
				        <div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<div class="row">
										<div class="col-xs-4 image-container">
											<div class="profile-img-wrapper">
												<img alt="" src="../../assets/img/profile/'.$img_name.'"/>
											</div>
										</div>
										<div class="col-xs-8">
											<div class="row">
												<div class="col-xs-12 empName-container">
													<label>Employee Name</label><br/>
													<input id="edit_empName" name="edit_empName" value="'.$row['employee_name'].'" class="form-control" type="text">
													<input name="edit_empID" value="'.$row['employee_id'].'" type="hidden">
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 empEmail-container">
													<label>Email Address</label><br/>
													<input id="edit_empEmail" name="edit_empEmail" value="'.$row['email_address'].'" class="form-control" type="text">
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 empPhone-container">
													<label>Phone Number</label><br/>
													<input id="edit_empPhone" name="edit_empPhone" value="'.$row['phone_number'].'" class="form-control" type="text">
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="row addphoto-row">
										<div class="col-xs-12">
											<label>Add Profile Image</label><br/>
											<input id="edit_empImage" name="edit_empImage" class="form-control" type="file">
											<input id="profile_img" name="profile_img" type="hidden" value="'.$row['profile_img'].'" />
										</div>
									</div> -->
									<div class="row expertise-row">
										<div class="col-xs-12">
											<label for="edit_empExpertise">Area of Expertise</label><br/>
											<select id="edit_empExpertise" name="edit_empExpertise" class="form-control" type="text">
												<option value="'.$row['area_of_expertise'].'" selected>'.$row['area_of_expertise'].'</option>
												<option value="" disabled></option>
												<option value="Chemistry">Chemistry</option>
												<option value="Physics">Physics</option>
												<option value="Computer Science">Computer Science</option>
											</select>
										</div>
									</div>
									<div class="row specialization-row">
										<div class="col-xs-12">
											<label for="edit_specialization">Area of Specialization</label><br/>
											<input id="edit_specialization" name="edit_specialization" class="form-control" value="'.$row['area_of_specialization'].'" type="text">
										</div>
									</div>
									<div class="row bio-row">
										<div class="col-xs-12">
											<label>Bio</label><br/>
											<textarea id="edit_empBio" name="edit_empBio" class="form-control">'.$row['bio_information'].'</textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-success pull-right">Submit</button>
				      </div>
				    </div>
				  </div>
				</div>
			</form>
		';
	}
	
	//close connection
	mysqli_close($dbConnection);
?>

