
<?php
// if (!$_SESSION["UserID"]){  //check session
// 	Header("Location: form.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form
// }
	include("condb.php");
	$ID = $_SESSION["UserID"];


if ($ID=='') {	
}
else {
		// echo $ID;
	 // exit();
$sql = "SELECT * FROM tbl_member WHERE member_id=$ID ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
// extract($row);
// 	echo $sql;
//  echo "<pre>";
// 	  print_r($_SESSION);
// echo "</pre>";
	
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LaptopShop</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
