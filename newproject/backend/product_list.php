<?php
error_reporting( error_reporting() & ~E_NOTICE );
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:
$query = "
SELECT * FROM tbl_product as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
ORDER BY p.p_id DESC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

// //2. query ข้อมูลจากตาราง tb_admin:
// $query3 = "SELECT * FROM tbl_type ORDER BY type_id DESC" or die("Error:" . mysqli_error());
// //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
// $row = mysqli_query($con, $query3);
// //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:


//2. query ข้อมูลจากตาราง tb_member:
// $sql = "SELECT *FROM tbl_product as p 
// ORDER BY p.p_id asc";
// $result2 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
// $row = mysqli_fetch_array($result2);

// echo '<pre>';
// print_r($result2);
// echo '</pre>';

//echo $sql;

//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

echo ' <table id="example1" class="table table-bordered table-striped">';
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr class='info'>
      <th width='5%'>id</th>
      <th width=15%>type</th>
      <th width=30%>name</th>
      <th width=15%>price</th>
      <th width=15%>img</th>
      <th width=5%>edit</th>
      <th width=5%>delete</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["p_id"] .  "</td> ";
    echo "<td>" .$row["type_name"] .  "</td> ";
    echo "<td>" .$row["p_name"] .  "</td> ";
    echo "<td>" .""." ".$row["p_price"] ." Đ".  "</td> ";
    echo "<td align=center>"."<img src='img/".$row['p_img']."' width='100'>"."</td>";

    //แก้ไขข้อมูล
    echo "<td><a href='product.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>edit</a></td> ";
    
    //ลบข้อมูล
    echo "<td><a href='product_form_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>