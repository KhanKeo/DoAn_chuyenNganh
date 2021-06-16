<?php
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>
<!-- Latest compiled and minified CSS -->
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7"> <br />
      <h4 align="center"> Add Product </h4>
      <hr />
      <form  name="addproduct" action="product_form_add_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-8">
            <p> Name</p>
            <input type="text"  name="p_name" class="form-control" required placeholder="NameLatop" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-6">
            <p> Type</p>
            <select name="type_id" class="form-control" required>
              <option value="type_id">Type</option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["type_id"];?>">
                <?php echo $results["type_name"]; ?>
              </option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> Detail </p>
            <textarea name="p_detail"  class="form-control"  rows="3"  required placeholder="Detail laptop"></textarea>
             <!-- <textarea id="editor1" name="p_detail" rows="10" cols="80" style="visibility: hidden; display: none;">                                       
                    </textarea> -->
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <p> price </p>
            <input type="text" name="p_price" id="p_price" class="form-control" required placeholder="Price"/>
          </div>
        </div>
        <div class="form-group">
          
          <div class="col-sm-12">
            <p> img  </p>
            <input type="file" name="p_img" id="p_img" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-danger" name="btnadd"><span class="glyphicon glyphicon-saved"></span> Save </button>
            
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
mysqli_close($con);
?>