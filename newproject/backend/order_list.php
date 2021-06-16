<?php
error_reporting( error_reporting() & ~E_NOTICE );
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:
$query = "SELECT * FROM tbl_order ORDER BY order_id DESC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo ' <table id="example1" class="table table-bordered table-striped">';
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr class='info'>
      <th width='5%'>id</th>
      <th>or_user</th>
      <th>or_pass</th>
      <th>or_name</th>
      <th>or_email</th>
      <th>or_tel</th>
      <th>or_address</th>
      <th>date_save</th>
      <th>or_price</th>
       <th width=5%>edit</th>
      <th width=5%>delete</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["order_id"] .  "</td> ";
    echo "<td>" .$row["or_user"] .  "</td> ";
    echo "<td>" .$row["or_pass"] .  "</td> ";
    echo "<td>" .$row["or_name"] .  "</td> ";
    echo "<td>" .$row["or_email"] .  "</td> ";
    echo "<td>" .$row["or_tel"] .  "</td> ";
    echo "<td>" .$row["or_address"] .  "</td> ";
    echo "<td>" .$row["date_save"] .  "</td> ";
    echo "<td>" .$row["or_price"] .  "</td> ";
    //แก้ไขข้อมูล
     echo "<td><a href='#?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>edit</a></td> ";
    
    //ลบข้อมูล
    echo "<td><a href='order_form_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>