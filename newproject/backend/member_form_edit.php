
<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$member_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_member WHERE member_id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form  name="register" action="member_form_edit_db.php" method="POST" class="form-horizontal">
  <input type="hidden" name="member_id" value="<?php echo $member_id; ?>" />
  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-sm-3" align="center">
      <br>
      <h4> Edit Member </h4>
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Username </div>
    <div class="col-sm-3" align="left">
      <input  name="m_user" type="text" required class="form-control" id="m_user" value="<?php echo $m_user; ?>" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align="right"> Password </div>
    <div class="col-sm-3" align="left">
      <input  name="m_pass" type="text" required class="form-control" id="m_pass" value="<?php echo $m_pass; ?>" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Fullname </div>
    <div class="col-sm-4" align="left">
      <input  name="m_name" type="text" required class="form-control" id="m_name" value="<?php echo $m_name; ?>" placeholder="fullname" />
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-2" align="right"> email  </div>
    <div class="col-sm-4" align="left">
      <input  name="m_email" type="email" class="form-control" id="m_email" value="<?php echo $m_email; ?>"   placeholder="name@hotmail.com"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Tell  </div>
    <div class="col-sm-4" align="left">
      <input  name="m_tel" type="text" class="form-control" id="m_tel" value="<?php echo $m_tel; ?>"  placeholder="number only" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> address  </div>
    <div class="col-sm-4" align="left">
      <textarea name="m_address" class="form-control"><?php echo $m_address; ?></textarea>
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-warning" id="btn"><span class="glyphicon glyphicon-cog"></span> Edit  </button>
      
    </div>
    
  </div>
</form>