<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Input Data User</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		   <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu"> 
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Admin - Admin Perpustakaan
                </p>
              </li>
              <li class="user-footer bg-black">
                <div class="pull-right">
                  <a href="#" class="btn bg-navy btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php include "sidebar.php" ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>  
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li>Manage Data User</li>
        <li class="active">Input Data User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">      
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Input Data User</h3> 
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-edit"></i>

              <h3 class="box-title">Form Tambah Data User</h3>
            </div>
            <div class="box-body">
              <form action="saveuser.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
				  <label>Username</label>
                  <input type="text" class="form-control" name="kodeuser" placeholder="Username ( NIS )" required>
                </div>
                <div class="form-group">
				  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" maxlength="32" required>
                </div>
                <div class="form-group">
				  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                </div>
				<div class="form-group">
				  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                </div>
				<div class="form-group">  
                  <label>Nomer Telepon</label>
                  <input type="number " class="form-control" name="nomortelpon" placeholder="Nomor Telepon" maxlength="15">
                </div>
				<div class="form-group">
                  <label>Role</label>
                  <select class="form-control select2" style="width: 10%;" name="listrole">
                    <?php
					   include "koneksi.php";
					   $sql = "select * from role";
					   $result= $conn->query($sql);
					   if ($result->num_rows > 0) {
						// output data of each row
						  while($row = $result->fetch_assoc()) {
							 echo "<option value='".$row["idrole"]."'>".$row["namarole"]."</option>";
						  }
					   }
				    ?>
                    </select>
                  </div>
				<div class="box-footer clearfix">
					<input type="submit" name="submituser" value="Submit" class="pull-right btn btn-default"/>
				</div>
              </form>
            </div>
          </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<footer class="main-footer">
    <strong>Copyright &copy; 2016 Dhuhri Awan Prakoso </strong> All rights reserved.
</footer> 


<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
