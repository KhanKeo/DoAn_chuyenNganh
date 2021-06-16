<?php
include('h.php');
include("condb.php");
$p_id = $_GET["id"];
?>
<!DOCTYPE html>
<head>
  <?php include('boot4.php');?>
  <style>
  * {
  box-sizing: border-box;
  }
  .zoom {
  padding: 60px;
  transition: transform .5s;
  width: 400px;
  height: 400px;
  margin: 0 auto;
  }
  .zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5);
  }
  </style>
</head>
<body>
  <div class="container">
  <img src="images/banner.jpg" alt="banner" width="1110" height="300"/>
  </div>
  <?php
  include('navbar.php');
  ?>
  <div class="container ">
    <div class="row">
      <div class="col-md-2">
        <?php
        include("menu.php");
        ?>
      </div>
      
      <?php
      $sql = "SELECT * FROM tbl_product as p, tbl_type as t
      WHERE  p.type_id=t.type_id
      AND p_id = $p_id
      ";
      $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
      $row = mysqli_fetch_array($result);
      ?>
      <div class="col-md-10">
        <div class="container" style="margin-top: 50px">
          <div class="row">
            <div class="col-md-6">
              <div class="zoom">
                <?php echo"<img src='backend/img/".$row['p_img']."'width='100%'>";?>
              </div>
            </div>
            <div class="col-md-6">
              <h3><b><?php echo $row["p_name"];?></b></h3>
              <p>
                Type : <?php echo $row["type_name"];?>
                <br>
                price: <font color="red"> <?php echo $row["p_price"];?> </font> VND
                
              </p>
              <?php echo $row["p_detail"];?>
              
              <div> 
              <a href="form_login_m.php" class="btn btn-danger" id="btn"><span class="glyphicon "></span><i class="fab fa-jedi-order"></i> Please Login befor buy Laptop </button></a>
              <!-- // if($_SESSION["User"]){
              //   echo '<button class="btn btn-info my-2 my-sm-0">Buy now</button>';
              // }else{
              //   echo '<a href="form_order.php" class="btn btn-info my-2 my-sm-0" >Buy now</a>';
              // }
               -->
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5500ee80057fdb99"></script>
  <div class="addthis_inline_share_toolbox_sf2w" style="margin-left: 400px"></div></p>
  
</body>
</html>
