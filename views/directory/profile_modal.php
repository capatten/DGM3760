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
		<div class="modal fade" id="profile_'.$row['employee_id'].'" tabindex="-1" role="dialog" data-backdrop="static">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">'.$row['employee_name'].'</h4>
		      </div>
		      <div class="modal-body">
		        <div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-4 image-container">
									<img alt="" src="../../assets/img/profile/'.$img_name.'"/>
								</div>
								<div class="col-xs-8">
									<div class="row">
										<div class="col-xs-12 empName-container">
											<label>Employee Name</label><br/>
											<span>'.$row['employee_name'].'</span>
										</div>
									</div>
								</div>
							</div>
							<div class="row expertise-row">
								<div class="col-xs-12">
									<label>Area of Expertise</label><br/>
									<p>'.$row['area_of_expertise'].'</p>
								</div>
							</div>
							<div class="row specialization-row">
								<div class="col-xs-12">
									<label>Area of Specialization</label><br/>
									<p>'.$row['area_of_specialization'].'</p>
								</div>
							</div>
							<div class="row bio-row">
								<div class="col-xs-12">
									<label>Bio</label><br/>
									<p>'.$row['bio_information'].'</p>
								</div>
							</div>
						</div>
					</div>
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		';
	}
	
	//close connection
	mysqli_close($dbConnection);
?>