<?php
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$or_user = $_POST["or_user"];
	$or_pass = $_POST["or_pass"];
	$or_name = $_POST["or_name"];
	$or_email = $_POST["or_email"];
	$or_tel = $_POST["or_tel"];
	$or_address = $_POST["or_address"];
	$or_price = $_POST["or_price"];
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO tbl_order(or_user, or_pass, or_name, or_email, or_tel, or_address, or_price)
			 VALUES('$or_user', '$or_pass', '$or_name', '$or_email', '$or_tel', '$or_address','$or_price')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('order Succesfuly');";
	echo "window.location = 'order_form_add.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to register again');";
	echo "</script>";
}
?>