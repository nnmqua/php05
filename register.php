<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./bat%20dong%20san.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="logo-container">
    <div class="container">
        <picture>
            <source srcset="./Anh%20bat%20dong%20san/banner-top.gif" media="(max-width:320px)">
            <source srcset="./Anh%20bat%20dong%20san/banner-top.gif" media="(max-width:988px)">
            <img srcset="./Anh%20bat%20dong%20san/banner-top.gif">
        </picture>
        <!--<img src="./Anh%20bai%20boostrap/banner-2.jpg" alt="Logo Softech Aptech" title="Logo Softech Aptech"/>-->
    </div>
</div>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#">Brand</a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="trenhang">
                    <li><a href="./bat%20dong%20%20san.html">Trang chủ</a></li>
                    <li><a href="./gioi%20thieu.html">Giới thiệu</a></li>
                    <li><a href="./nha%20dat%20ban.html">Nhà đất bán</a></li>
                    <li><a href="./nha%20dat%20cho%20thue.html">Nhà đất cho thuê</a></li>
                    <li><a href="./du%20an.html">Dự án</a></li>
                    <li class="active"><a href="#">Đăng ký <span class="sr-only">(current)</span></a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<?php
 include'server.php'; 
 ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Register</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="register-complete.php" enctype="multipart/form-data">
                            <fieldset>
                        
                                <div class="form-group">
                                    <input class="form-control" placeholder="First name" name="first_name" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last name" name="last_name" type="text" >
                                </div>
                                <div class="form-group">
                                
                                        <input type="file" name="avatar">
                                    </div>
                                <div class="form-group">
                                <input class="form-control" placeholder="user name" name="user_name" type="text" >
                                </div>
                                <div class="form-group">
                                <input class="form-control" placeholder="password" name="password" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Birthday" name="birthday" type="date" >
                                </div>
                                <div class="form-group">
                                    <input  value="1" name="gender" type="radio"> Male
                                    <input  value="2" name="gender" type="radio"> Female
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone" name="phone" type="text" >
                                </div>
                               
                        
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="register" class="btn btn-primary btn-lg">Register</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <div class="foot">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-4" style="background-color:none;"><div id="logo-container">
                    Bất động sản Đà Nẵng - www.batdongsan.com.vn<br>
                    Địa chỉ: 112 Trưng Nữ Vương, TP.Đà Nẵng<br>
                    Điện thoại: 0511.3822427 - 0935.350757<br>
                    Email: batdongsandannang@gmail.com<br>
                    <br>

                </div></div>
            <div class="col-xs-12 col-sm-6 col-lg-4" style="background-color:none;"> <div id="logo-container"><img src="./Anh%20bat%20dong%20san/logo1.png"  width="auto" height="100%">

                </div></div>
            <div class="col-xs-12 col-sm-6 col-lg-4" style="background-color:none;"> <div id="logo-container">
                    Liên Hệ Quảng Cáo<br>
                    Địa chỉ: 112 Trưng Nữ Vương, TP.Đà Nẵng<br>
                    Email: batdongsandannang@gmail.com<br>
                    Design: <b>Minh Quân</b>
                </div></div>
        </div>

    </div>
</div>
    <!-- jQuery -->
    <script src="jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="sb-admin-2.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
