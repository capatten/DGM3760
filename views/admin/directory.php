<?php
	require_once('../variables.php');
	include './authorize.php';
	$selectedNav = "admin";
	include '../../layout/head.php';
	include './addNew_modal.php';
	include './confirmDelete_modal.php';
	include './editProfile_modal.php';
	include '../../layout/foot.php';
?>

<link href="../../assets/css/views/admin/admin.css" rel="stylesheet"/>

<div class="container emp_dir">
	<div class="row">
		<div class="col-xs-12 view-header">
			<h2>Employee Directory</h2>
		</div>
	</div>
	<div>
		<div class="container">
			<div class="row addNewEmployee-row">
				<div class="col-xs-12">
					<h3 data-toggle="modal" data-target="#addNew">Add New Employee</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<?php				
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
						<div class="row emp_row">
							<div class="col-xs-1 img-container">
								<img alt="" src="../../assets/img/profile/'.$img_name.'"/>
							</div>
							<div class="col-xs-11 details-container">
								<span id="'.$row['employee_id'].'" title="View [Employee Name] Profile">
									'.$row['employee_name'].'
								</span>
								<div class="admin-options">
									<i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#edit_'.$row['employee_id'].'" ></i>
									&nbsp;&nbsp;
									<i class="fa fa-trash" aria-hidden="true" data-empid="'.$row['employee_id'].'" data-empname="'.$row['employee_name'].'" data-img="'.$row['profile_img'].'" data-toggle="modal" data-target="#deleteEmp" ></i>
								</div>
							</div>
						</div>
					';
				}
				
				//close connection
				mysqli_close($dbConnection);
			?>
		</div>
	</div>
</div>

<script>
	var $deleteIcon = $(".fa-trash");
	var $delete_empID = $("#delete_empID");
	var $delete_empName = $("#delete_empName");
	var $delete_img = $("#delete_img");

	$deleteIcon.on('click', function(){
		var empID = $(this).data('empid');
		var empName = $(this).data('empname').toUpperCase();
		var img = $(this).data('img');

		$delete_empID.val(empID);
		$delete_empName.text(empName);
		$delete_img.val(img);
		
	});
</script>