      <?php
      $q = $_GET['q'];
            include("condb.php");
            $sql = "SELECT * FROM tbl_product as p
            INNER JOIN tbl_type  as t ON p.type_id=t.type_id
            WHERE p_status = 0
    
            ORDER BY p.p_id DESC";  //เรียกข้อมูลมาแสดงทั้งหมด
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
            ?>
          
            <div class="border col-md-3" align="center">
             <a href="prd.php?id=<?php echo $row[0]; ?>"> <?php echo"<img src='backend/img/".$row['p_img']."'width='100%' >";?></a>
              
              <p> <a href="prd.php?id=<?php echo $row[0]; ?>"> <?php echo $row["p_name"];?> </a>
              <div class="rating text-warning font size-10"> 
                <span> <i class="fa fa-star"> </i> </span>
                <span> <i class="fa fa-star"> </i> </span>
                <span> <i class="fa fa-star"> </i> </span>
                <span> <i class="fa fa-star"> </i> </span>
                <span> <i class="far fa-star"></i> </span>
                </div>
                price <font color="red"> <?php echo $row["p_price"];?></font> VND 
              </p>
              
              <?php 
              // <p><a href="#" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-zoom-in"></span>รายละเอียด</a> <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-hourglass"></span>Buy now</a></p>
              ?>
            </div>
            
            <?php } ?>
            
