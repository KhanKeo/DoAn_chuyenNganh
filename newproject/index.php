<?php session_start();?>
<?php
include('h.php');
include("condb.php");
?>
<!DOCTYPE html>
<head>
  <?php include('boot4.php');?>
</head>
<body>
<div class="container">
<!-- <img src="images/banner3.jpg" class="img-fluid" alt="Responsive image"/> -->
<?php include('background.php')?>
</div>
  <?php
  include('navbar.php');
  //include("slide.php");
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php
        include("menu.php");
        ?>
      </div>
      <div class="col-md-12">
        <div class="container" style="margin-top: 50px">
          <div class="row">
            <?php
            $q = $_GET['q'];
            if($q!=''){
            include("show_product_q.php");
            }else{
            include('show_product.php');
            }
          
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p><?php include('carousel.php');?></p>
<p><?php include('footer.php');?></p>
</body>
</html>

