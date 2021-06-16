<div class="container">
  <div class="row">
    <div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <!-- <a class="btn btn-dark" href="index.php" role="button">Home</a> -->
        <a class="btn btn-dark" href="index.php"><i class="fas fa-home"></i>&nbsp;Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i>&nbsp;Ship</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-question"></i>&nbsp;Qustion</a>
            </li> 

            <?php
            if ($ID!='') {
            
            } else {
            ?>
            <div class="btn-group">
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-sign-in-alt"></i>Login
              </button>
              <div class="dropdown-menu list-group-item-dark">
                <a class="dropdown-item " href="form_login_a.php">Admin</a>
                <a class="dropdown-item " href="form_login_m.php">Member</a>
              </div>
            </div>
            <?php } ?>


            <?php 
            if ($ID!='') {
              ?>
              <li class="nav-item">
              <a class="btn btn-danger" href="logout.php" role="button" onclick="return confirm('Do you want to logout ?')">Logout</a>
            </li>
            <?php } ?>

            <?php
            if ($ID!='') {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="#"> Welcome <?php echo $row["m_name"]; ?></a>
            </li>
            
            <?php }?>
            
          </ul>
          <form class="form-inline my-2 my-lg-0" name="qp" action="index.php" method="GET">
            <input class="form-control mr-sm-2" type="text" placeholder="Search name Laptop" name="q">
            <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
          </form>
          
          <?php 
              if($_SESSION["User"]){
                echo '<button class="btn btn-danger ">Form Login</button>';
              }else{
                echo '<a href="backend/member_form_add.php" class="btn btn-danger" >Form Login</a>';
              }
              ?>    
        </div>
      </nav>
    </div>
  </div>
</div>
<?php include('script4.php');?>