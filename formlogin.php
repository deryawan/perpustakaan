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
    <title>Form Login</title>
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
                                <input type="text" class="form-control" placeholder="cari judul buku, pengarang, penerbit dll">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div> 
                        </form
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-success navbar-btn navbar-right" data-toggle="modal" data-target="#myModal" id="myBtn"><span class="glyphicon glyphicon-log-in"></span><b> LOG IN </b></button>     
                    </div><!-- navbar-collapse -->
                </div><!-- navbar -->
            </div>
        <div class="row">
            <hr></hr>
           <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">
						        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
						            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
						            <div style="position:absolute;display:block;background:url('images/slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
						        </div>
						        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
						            <div data-p="144.50" style="display: none;">
						                <img data-u="image" src="perpustakaan.jpg" />
						                <img data-u="thumb" src="perpustakaan.jpg" />
						            </div>
						            <div data-p="144.50" style="display: none;">
						                <img data-u="image" src="perpustakaan1.jpg" />
						                <img data-u="thumb" src="perpustakaan1.jpg" />
						            </div>
						            <div data-p="144.50" style="display: none;">
						                <img data-u="image" src="perpustakaan2.jpg" />
						                <img data-u="thumb" src="perpustakaan2.jpg" />
                                    </div>
						            <a data-u="ad" href="#" style="display:none">jQuery Slider</a>
						        </div>
					        	<!-- Thumbnail Navigator -->
						        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
						            <!-- Thumbnail Item Skin Begin -->
						            <div data-u="slides" style="cursor: default;">
						                <div data-u="prototype" class="p">
						                    <div class="w">
						                        <div data-u="thumbnailtemplate" class="t"></div>
						                    </div>
						                    <div class="c"></div>
						                </div>
						            </div>
						            <!-- Thumbnail Item Skin End -->
						        </div>
					        	<!-- Arrow Navigator -->
						        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
						        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
					    	</div>
						</div>
        </div>
        <hr></hr>
        <div class="row" style="margin-left:125px">
            <?php
                include "koneksi.php";
                $sql = "select * from buku limit 4";
                $result = $conn->query($sql);
                if ($result->num_rows>0){
                while($row =$result->fetch_array()){
            ?>
                <div class="row-fluid">
                    <div class="col-xs-6">
                        <table>
                            <tr>
                                <th rowspan="6" width="200">
                                    <img width="80%" height="200" style="margin-top:50px;" title="" src="uploads/images/<?= $row['urlcover']; ?>">
                                    <a href="detail.php?idbuku=<?= $row['idbuku']; ?>" title="<?= $row['judulbuku']; ?>"><div class="model-caption"> <?= substr($row['judulbuku'],0,30); ?></div></a>
                                </th>
                            </tr>
                            <tr>
                                <th>&nbsp; Pengarang</th>
                                <td width="30" align=center>:</td>
                                <td>&nbsp; <?= $row['pengarang']; ?></td>
                            </tr>
                            <tr>
                                <th>&nbsp; Penerbit</th>
                                <td width="30" align=center>:</td>
                                <td><?= $row['penerbit']; ?></td>
                            </tr>
                            <tr>
                                <th>&nbsp; Kota Terbit</th>
                                <td width="30" align=center>:</td>
                                <td><?= $row['kotaterbit']; ?></td>
                            </tr>
                            <tr>
                                <th>&nbsp; Tahun Terbit</th>
                                <td width="30" align=center>:</td>
                                <td><?= $row['tahunterbit']; ?></td>
                            </tr>
                            <tr>
                                <th>&nbsp; Kategori</th>
                                <td width="30" align=center>:</td>
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
                <h2 style="align: left"><b>Lokasi SMK Dr. Tjipto Semarang</b></h2>
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
</footer>
        <script src="assets-login-regis/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
				var jssor_1_SlideshowTransitions = [
	              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
	              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
	            ];
            
	            var jssor_1_options = {
	              $AutoPlay: true,
	              $SlideshowOptions: {
	                $Class: $JssorSlideshowRunner$,
	                $Transitions: jssor_1_SlideshowTransitions,
	                $TransitionsOrder: 1
	              },
	              $ArrowNavigatorOptions: {
	                $Class: $JssorArrowNavigator$
	              },
	              $ThumbnailNavigatorOptions: {
	                $Class: $JssorThumbnailNavigator$,
	                $Cols: 10,
	                $SpacingX: 8,
	                $SpacingY: 8,
	                $Align: 360
	              }
	            };
            
	            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
	            function ScaleSlider() {
	                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
	                if (refSize) {
	                    refSize = Math.min(refSize, 800);
	                    jssor_1_slider.$ScaleWidth(refSize);
	                }
	                else {
	                    window.setTimeout(ScaleSlider, 30);
	                }
	            }

	            ScaleSlider();
	            $(window).bind("load", ScaleSlider);
	            $(window).bind("resize", ScaleSlider);
	            $(window).bind("orientationchange", ScaleSlider);
			</script>
</body>
</html>