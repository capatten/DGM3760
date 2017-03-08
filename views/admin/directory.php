<cfinclude template = "../../layout/head.cfm">

<style>
	div.emp_dir div.view-header h2 {
		text-align: center;
		margin: 10px auto;
	}

	div.emp_dir div.emp_row img {
		width: 100%;
	}

	div.emp_dir div.emp_row div.admin-options {
		/*position: absolute;
    bottom: 0;
    display: block;*/
		display: inline-block;
    margin-left: 15px;
	}

	div.emp_dir div.emp_row div.admin-options i.fa-pencil {
		color: orange;
		font-size: 20px;
	}

	div.emp_dir div.emp_row div.admin-options i.fa-trash {
		color: red;
		margin-left: 15px;
		font-size: 20px;
	}

	div.emp_dir div.emp_row div.admin-options i.fa-pencil:hover,
	div.emp_dir div.emp_row div.admin-options i.fa-trash:hover {
		transform: scale(1.5);
		cursor: pointer;
	}

	div.emp_dir div.emp_row div.details-container {
		height:51px;
	}

	div.emp_dir div.addNewEmployee-row {
		background-color: #e6e6e6;
    border: 1px solid #000;
    text-align: center;
    border-radius: 15px;
		margin-bottom: 15px;
	}

	div.emp_dir div.addNewEmployee-row:hover {
		background-color: #66d866;
		border: 1px solid #54b154;
		cursor: pointer;
	}

	div.emp_dir div.addNewEmployee-row h3 {
		margin: 0;
    padding: 15px;
	}

	div.modal div.modal-body div.addnew label {
		margin-bottom: 0px;
		margin-top: 5px;
	}

	div.modal div.modal-body div.image-container img {
		width:100%;
		margin-bottom: 15px;
	}

	div.modal div.modal-body div.profile-img-wrapper:hover {
		color: #797878;
	}

	div.modal div.modal-body div.bio-row textarea{
		resize: vertical;
	}
/*
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
	}*/
</style>

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
			<div class="row emp_row">
				<div class="col-xs-1 img-container">
					<img alt="" src="../../assets/img/profile/default.png"/>
				</div>
				<div class="col-xs-11 details-container">
					<span id="[emp_id]" title="View [Employee Name] Profile">
						[Employee Name]
					</span>
					<div class="admin-options">
						<i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#edit" ></i>
						&nbsp;&nbsp;
						<i class="fa fa-trash" aria-hidden="true" data-empid="empid" data-empname="Chad Patten" data-toggle="modal" data-target="#deleteEmp" ></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<cfinclude template = "./addNew_modal.cfm">
<cfinclude template = "./editProfile_modal.cfm">
<cfinclude template = "./confirmDelete_modal.cfm">

<cfinclude template = "../../layout/foot.cfm">

<script>
	var $deleteIcon = $(".fa-trash");
	var $delete_empID = $("#delete_empID");
	var $delete_empName = $("#delete_empName");

	$deleteIcon.on('click', function(){
		var empID = $(this).data('empid');
		var empName = $(this).data('empname').toUpperCase();

		$delete_empID.val(empID);
		$delete_empName.text(empName);
	});
</script>