<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Manage Email Addresses</title>
	</head>
	<body>
		<form action="<?php $SERVER['PHP_SELF'];?>" method="POST" >
			<?php				
				//connect to the database
				$dbConnection = mysqli_connect('localhost','pattende_dgm3760','Pass1word','pattende_dgm3760') or die('Test');
				
				//delete records
				if(isset($_POST['submit'])){
					//build delete query
					$del_query ="DELETE FROM Assignment4 WHERE id IN (" .implode( "," , $_POST['delArray'] ). ")";
					
					//run Query
					mysqli_query($dbConnection, $del_query) or die ('Query Failed');
				};// end if
				
				
				//build query
				$query =
				"SELECT * FROM Assignment4";
				
				//run Query
				$result = mysqli_query($dbConnection, $query) or die ('Query Failed');
				
				//display result
				while($row = mysqli_fetch_array($result)){
					echo '<label for="'.$row['id'].'">';
					echo '<input type="checkbox" value="'.$row['id'].'" id="'.$row['id'].'" name="delArray[]" />';
					echo $row[f_name].' '.$row[l_name].' - '.$row[email_address].'</br/>';
					echo '</label>';
				}
				
				//close connection
				mysqli_close($dbConnection);
			?>
			<input type="submit" name="submit" class="btn btn-primary" value="Remove Users"/>
		</form>
	</body>
</html>