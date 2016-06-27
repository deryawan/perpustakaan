<?php
    include('login.php');

    if(isset($_SESSION['login_user'])){
    header("location:index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Katalog</title>
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

    <script src="assets-login-regis/js/jquery-1.11.1.min.js"></script>
    <script src="assets-login-regis/js/jssor.slider.mini.js"></script>
    <style>
        .navbar-default {
            background-color: antiquewhite;
            border-color: #E7E7E7;
        }
        .modal-header, h4, .close {
            background-color: #00ffff;
            color:#669999 !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-footer {
            background-color: #00ffff;
        }
        .modal-body {
            background-color: azure;
        }
        body { 
            padding-top: 65px; 
            background-color:azure;    
        }
        
        .model-caption {
            background-color: #FFFFFF;
            opacity: 0.6;
            width: 28%;
            height: auto;
            padding: 3px;
            margin-top: -50px;
            position: absolute;
            z-index: 9999;
            padding: 10px;
        }
                /* slider */
         .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('../images/slider/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }

        /* jssor slider thumbnail navigator skin 01 css */
        /*
        .jssort01 .p            (normal)
        .jssort01 .p:hover      (normal mouseover)
        .jssort01 .p.pav        (active)
        .jssort01 .p.pdn        (mousedown)
        */
        .jssort01 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 72px;
            height: 72px;
        }

        .jssort01 .t {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .jssort01 .w {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }

        .jssort01 .c {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
            box-sizing: content-box;
            background: url('../images/slider/t01.png') -800px -800px no-repeat;
            _background: none;
        }

        .jssort01 .pav .c {
            top: 2px;
            _top: 0px;
            left: 2px;
            _left: 0px;
            width: 68px;
            height: 68px;
            border: #000 0px solid;
            _border: #fff 2px solid;
            background-position: 50% 50%;
        }

        .jssort01 .p:hover .c {
            top: 0px;
            left: 0px;
            width: 70px;
            height: 70px;
            border: #fff 1px solid;
            background-position: 50% 50%;
        }

        .jssort01 .p.pdn .c {
            background-position: 50% 50%;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
        }

        * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 72px;
            height /**/: 72px;
        }
    </style>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
        });
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
</head>
<body bgcolor="#E6E6FA">
<header> <!-- header navbar -->
        <div class="container">
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container"><!--container navbar --!><!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="search">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand" href="formlogin.php">E-Lib SMK Dr. Tjipto Semarang</a>
                    </div>
                    <div class="navbar-collapse collapse" id="search"><!-- Collect the nav links, form, and other content for toggling -->
                        <ul class="nav navbar-nav">
                            <li id="home">
                             <a href="formlogin.php">Beranda</a>
                            </li>
                            <li id="home_catalog">
                             <a href="katalog.php">Katalog</a>
                            </li>
                            <li id="ekstrakulikuler">
                             <a href="ekstrakulikuler.php">Ekstrakulikuler</a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="cari judul buku, pengarang, penerbit dll" size="50">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </form
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-success navbar-btn navbar-right" data-toggle="modal" data-target="#myModal" id="myBtn"><span class="glyphicon glyphicon-log-in"></span><b> LOG IN </b></button>     
                    </div><!-- navbar-collapse -->
                </div><!-- navbar -->
            </div>
        <hr></hr>
        <div class="row">
            <?php
                include "koneksi.php";
                $sql = "select * from buku limit 6";
                $result = $conn->query($sql);
                if ($result->num_rows>0){
                while($row =$result->fetch_array()){
            ?>
                <div class="row-fluid">
                    <div class="col-xs-4">
                        <table id="example1" class="table">
                            <tr>
                                <th rowspan="6" width="150">
                                    <img width="80%" height="180" style="margin-top:30px;" title="" src="uploads/images/<?= $row['urlcover']; ?>">
                                    <a href="detail.php?idbuku=<?= $row['idbuku']; ?>" title="<?= $row['judulbuku']; ?>"><div class="model-caption"> <?= substr($row['judulbuku'],0,15); ?></div></a>
                                </th>
                            </tr>
                            <tr>
                                <th>Pengarang</th>
                                <td width="20">:</td>
                                <td><?= $row['pengarang']; ?></td>
                            </tr>
                            <tr>
                                <th>Penerbit</th>
                                <td width="20">:</td>
                                <td><?= $row['penerbit']; ?></td>
                            </tr>
                            <tr>
                                <th>Kota Terbit</th>
                                <td width="20">:</td>
                                <td><?= $row['kotaterbit']; ?></td>
                            </tr>
                            <tr>
                                <th>Tahun Terbit</th>
                                <td width="20">:</td>
                                <td><?= $row['tahunterbit']; ?></td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td width="20">:</td>
                                <td><?= $row['kategori']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php
                }
                }
            ?>   
        </div>
    </div>
</header>
<!-- Modal -->
<div class="container">
    <div class="row">
        <!-- buat ngakalin modal ga bisa keluar di navbar login in -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="padding:25px 40px;">
                        <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                        <p><small>Enter Username and Password to Log On:</small></p>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form action="login.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                            </div>
                            <div class="form-group">
                                <label for="password"><span class="glyphicon glyphicon-lock"></span> Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" checked>Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="submit"><span class="glyphicon glyphicon-log-in"></span><b> LOG IN</b></button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p>Forgot <a href="#">Password?</a></p>
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <hr>
            <div class="col-md-3 col-sm-3 col-lg-3">
                <h2 style="align: left"><b>SMK Dr. Tjipto Semarang</b></h2>
            </div>
            <div class="col-md-3 col-sm-3 col-lg-3">
                <p class="basic-contact">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jl. Kridangga No.1(Jl. Barito)</span>
                    <br>
                    <small>
                        &nbsp; &nbsp; &nbsp;&nbsp;Semarang, Jawa Tengah. Indonesia
                        <br>
                        <span class="glyphicon glyphicon-phone-alt"></span>&nbsp; +6224 3542040
                        <br>
                        <span class="glyphicon glyphicon-print"></span>&nbsp; +6224 3566100
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span>&nbsp; smktjipto_smg@yahoo.com
                        <br>
                    </small>
                </p>
            </div>
            <div class="col-md-3 col-sm-3 col-lg-3">
            <p class="operational-hours">Waktu Operasional</p>
                <table>
                    <tbody>
                        <tr>
                            <td> Senin - Jum'at <br></td>
                            <td>&nbsp; 07.00 - 17.00 </td>
                        </tr>
                        <tr>
                            <td> Sabtu <br></td>
                            <td>&nbsp; 07.00 - 14.00 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 col-sm-3 col-lg-3">
                <img src="uploads/images/logo-smk-dr-tjipto.jpg" width="40%">
            </div> 
        </div>
    </div>
    <hr>
    <div></div>
    <hr>
</footer>
        <!-- DataTables -->
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script src="assets-login-regis/bootstrap/js/bootstrap.min.js"></script>
        <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>