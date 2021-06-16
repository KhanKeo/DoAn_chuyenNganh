<?php include('h.php');?>
<body class="hold-transition skin-blue sidebar-mini">
  
    <header class="main-header">
      <!-- Logo -->
     <?php error_reporting( error_reporting() & ~E_NOTICE ); ?>
      <!-- Header Navbar: style can be found in header.less -->
   
    </header>
      <section class="content-header">
    
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Table member Order Product
                <!-- <a href="order_form_add.php?act=add" class="btn-info btn-sm">+ADD</a> </h3> -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-sm-12">
                 
                  <?php
                  $act = $_GET['act'];
                  if($act == 'add'){
                  include('order_form_add.php');
                  }elseif ($act == 'edit') {
                  include('order_form_edit.php');
                  }
                  else {
                  include('order_list.php');
                  }
                  ?>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>

  