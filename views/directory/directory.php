<?php include '../../layout/head.php';?>

<style>
	div.emp_dir div.view-header h2 {
		text-align: center;
		margin: 10px auto;
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

<?php				
	//connect to the database
	$dbConnection = mysqli_connect('localhost','root','Pass1word','dgm3760') or die('Connection Refused');
	
	/*
	//delete records
	if(isset($_POST['submit'])){
		//build delete query
		$del_query ="DELETE FROM Assignment4 WHERE id IN (" .implode( "," , $_POST['delArray'] ). ")";
		
		//run Query
		mysqli_query($dbConnection, $del_query) or die ('Query Failed');
	};// end if
	*/
	
	
	//build query
	$query =
	"Select * FROM emp_directory";
	
	//run Query
	$result = mysqli_query($dbConnection, $query) or die ('Query Failed');
	
	//display result
	while($row = mysqli_fetch_array($result)){
		echo '<label for="'.$row['employee_id'].'">';
		/*echo '<input type="checkbox" value="'.$row['id'].'" id="'.$row['id'].'" name="delArray[]" />';
		echo $row[f_name].' '.$row[l_name].' - '.$row[email_address].'</br/>';
		echo '</label>';*/
	}
	
	//close connection
	mysqli_close($dbConnection);
?>

<div class="container emp_dir">
	<div class="row">
		<div class="col-xs-12 view-header">
			<h2>Employee Directory</h2>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="row emp_row">
				<div class="col-xs-1 img-container">
					<img alt="" src="../../assets/img/profile/default.png"/>
				</div>
				<div class="col-xs-11 details-container">
					<a href="#" id="[emp_id]" title="View [Employee Name] Profile" data-toggle="modal" data-target="#myModal">
						[Employee Name]
					</a>
					&nbsp;&nbsp;
					<a href="#" title="Send Message to [Employee Name]" class="sndMsg" data-empid="[empID]" data-toggle="modal" data-target="#sendMsg">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include './profile_modal.php';?>
<?php include './sendMessage_modal.php';?>
<?php include '../../layout/foot.php';?>

<script>
	var $sndMsg = $(".sndMsg");
	var $sndMsgTo = $("#sndMsgTo");

	$sndMsg.on('click', function(){
		var empID = $(this).data('empid');
		$sndMsgTo.val(empID);
	});
</script>