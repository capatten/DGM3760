<?php
	$selectedNav = "directory";
	include '../../layout/head.php';
	include './profile_modal.php';
	include './sendMessage_modal.php';
	include '../../layout/foot.php';
?>

<style>
	div.emp_dir div.view-header h2 {
		text-align: center;
		margin: 10px auto;
	}
	
	div.emp_dir div.emp_row {
		margin-bottom: 15px;
	}

	div.emp_dir div.emp_row img {
		width: 100%;
	}

	div.emp_dir div.emp_row div.admin-options {
		position: absolute;
    bottom: 0;
    display: block;
	}

	div.emp_dir div.emp_row div.details-container {
		height:51px;
	}

	div.modal div.modal-body div.image-container img {
		width:100%;
		margin-bottom: 15px;
	}

	div.modal div.modal-body div.empName-container label {
		margin-bottom: 0px;
	}

	div.modal div.modal-body div.empName-container span {
		padding-left: 5px;
	}

	div.modal div.modal-body div.expertise-row label,
	div.modal div.modal-body div.specialization-row label,
	div.modal div.modal-body div.bio-row label {
		margin-bottom: 0px;
	}

	div.modal div.modal-body div.expertise-row p,
	div.modal div.modal-body div.specialization-row p,
	div.modal div.modal-body div.bio-row p {
		padding-left: 5px;
	}

	div.modal div.modal-body div.msg-container label,
	div.modal div.modal-body div.msg-from label {
		margin-bottom: 0px;
	}

	div.modal div.modal-body div.msg-container textarea {
		resize: vertical;
		width: 100%;
		min-height: 200px;
	}

	div.modal div.modal-body div.msg-from input {
		width:100%;
	}
</style>

<div class="container emp_dir">
	<div class="row">
		<div class="col-xs-12 view-header">
			<h2>Employee Directory</h2>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<?php				
				//connect to the database
				$dbConnection = mysqli_connect('localhost','root','Pass1word','dgm3760') or die('Connection Refused');

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
								<a href="#" id="'.$row['employee_id'].'" title="View '.$row['employee_name'].' Profile" data-toggle="modal" data-target="#profile_'.$row['employee_id'].'">
									'.$row['employee_name'].'
								</a>&nbsp;&nbsp;
								<a href="#" title="Send Message to '.$row['employee_name'].'" class="sndMsg" data-empid="'.$row['employee_id'].'" data-toggle="modal" data-target="#sendMsg">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</a>
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
	var $sndMsg = $(".sndMsg");
	var $sndMsgTo = $("#sndMsgTo");

	$sndMsg.on('click', function(){
		var empID = $(this).data('empid');
		$sndMsgTo.val(empID);
	});
</script>