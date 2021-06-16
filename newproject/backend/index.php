<?php session_start();?>
<?php include('h.php');?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      
      <!-- Header Navbar: style can be found in header.less -->
      <?php include('navbar.php');?>
      
      
      
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include('menu_left.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      
    <?php include('order.php');?>
    
    </div>
    
    <?php include('footer.php');?>