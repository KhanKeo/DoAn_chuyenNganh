<meta charset="UTF-8" />
<?php
include('connections.php');

$admin_user = $_POST['admin_user'];
$admin_pass = $_POST['admin_pass'];
$admin_name = $_POST['admin_name'];





$sql ="INSERT INTO tbl_admin
		
		(admin_user,  admin_pass, admin_name)
		
		VALUES
		
		('$admin_user', '$admin_pass', '$admin_name')";
		
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());



		mysqli_close($con);
		//exit();
		
		if($result){
			echo "<script>";
			echo "alert('Add Succesfuly');";
			echo "window.location ='admin.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='admin'; ";
			echo "</script>";
		}
		


?>