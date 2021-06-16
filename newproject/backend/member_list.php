<?php
error_reporting( error_reporting() & ~E_NOTICE );
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:
$query = "SELECT * FROM tbl_member ORDER BY member_id DESC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo ' <table id="example1" class="table table-bordered table-striped">';
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr class='info'>
      <th width='5%'>id</th>
      <th>m_user</th>
      <th>m_pass</th>
      <th>m_name</th>
      <th>m_email</th>
      <th>m_tel</th>
      <th width=40%>m_address</th>
      <th width=5%>edit</th>
      <th width=5%>delete</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["member_id"] .  "</td> ";
    echo "<td>" .$row["m_user"] .  "</td> ";
    echo "<td>" .$row["m_pass"] .  "</td> ";
    echo "<td>" .$row["m_name"] .  "</td> ";
    echo "<td>" .$row["m_email"] .  "</td> ";
    echo "<td>" .$row["m_tel"] .  "</td> ";
    echo "<td>" .$row["m_address"] .  "</td> ";
    //แก้ไขข้อมูล
    echo "<td><a href='member.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>edit</a></td> ";
    
    //ลบข้อมูล
    echo "<td><a href='member_form_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>