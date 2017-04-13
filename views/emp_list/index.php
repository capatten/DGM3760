<?php
	require_once('../variables.php');
	include '../../layout/head.php';
	include '../../layout/foot.php';
	
	session_start();
	
	$dbConnection = mysqli_connect(HOST,USER, PASSWORD, DB_NAME) or die('Connection Refused');
	
	// get all departments listed in table
	$query = "
		SELECT
			department_id
			,department_desc
		FROM
			llpa.ref_emp_department
		ORDER BY
			department_desc
	";
	
	$result_departments = mysqli_query($dbConnection, $query) or die('Query Failed');
	
	$departmentCondition = '';
	
	if(isset($_GET['filter'])){
		$departmentCondition= "AND department_id = $_GET[filter]";
	}
	
	// get all employees
	$query = "
		Select
			e.emp_id
			,concat(e.first_name,' ',e.last_name) as empName
			,d.department_id
		FROM
			llpa.emp as e
			
		LEFT JOIN llpa.emp_department as d
		ON e.emp_id = d.emp_id
		
		WHERE
			1 = 1
			$departmentCondition
		ORDER BY
			concat(e.first_name,' ',e.last_name)
	";
	
	$emp_list = mysqli_query($dbConnection, $query) or die('Query Failed');
?>

<style>
	div#addedAlert {
		position: absolute;
		top: -100px;
		text-align: center;
		left: 0px;
		width: 100%;
	}
	
	ul.empList {
		list-style: none;
	}
</style>

<div class="container">
	<?php 
		if(!empty($_SESSION['fullName'])){
			echo '<div id="addedAlert" class="alert alert-success" role="alert" style="position: absolute; top: -100px;"><span style="font-weight: bold;">'. $_SESSION['fullName'] .'</span> added successfully!</div>';
			unset($_SESSION['fullName']);
		}
	?>
	<div class="row">
		<div class="col-xs-12 col-sm-8 pull-left">
			<h1>Employee List</h1>
		</div>
		<div class="col-xs-12 col-sm-4 pull-right">
			<form id="filter-form" action="./" method="GET">
				<label for="filter" class="form-label">Filter by Department</label>
				<select id="filter" name="filter" class="form-control">
					<option value="" selected disabled>-- Select Department --</option>
					<?php
						while($row = mysqli_fetch_array($result_departments)){
							echo '<option value="'. $row['department_id'] .'" '
									. ($_GET['filter'] == $row['department_id'] ? 'selected':'')
							.'>'. $row['department_desc'].'</option>';
						}
					?>
				</select>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12">
		<?php 
			if(mysqli_num_rows($emp_list) == 0){
				echo '<p class="noRecords">Sorry no records found for your search criteria.</p>';
			}else{
				echo '<ul class="empList">';
				while($row = mysqli_fetch_array($emp_list)){
					echo '<li><h3>'. $row['empName'].'</h3></li>';
				}
				echo '</ul>';
			}
		?>
		</div>
	</div>
</div>

<script>
	var $filter = $("#filter");
	var $filterForm = $("#filter-form");
	
	$(document).ready(function(){
		setTimeout(function(){
			  $("#addedAlert").animate({top: "0px"});
		}, 500);

		setTimeout(function(){
			  $("#addedAlert").animate({top: "-100px"});
		}, 2000);
	});

	$filter.on('change', function(){
		$filterForm.submit();
	});
</script>

<?php 
	mysqli_close($dbConnection);
?>