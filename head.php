<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบสมาชิกศิษย์เก่า</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link href="source/dataTables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<?php  include("connect.php");  ?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <!--  -->
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div style="text-align: center;" > 
                            <h2>ระบบสมาชิกศิษย์เก่า</h2>
                            <h3>Nakhon Pathom Rajabhat University</h3>
                            <img src="img/npru.png" >
                            <?php if(isset($_SESSION["name"])){
                                echo '<h5>ผู้ใช้งาน : '.$_SESSION["name"].'</h5>';
                            };
                                ?>
                        </div>
                    </div>
                    <div class="col-lg-2 text-right col-md-2">
                    <!-- XXXX -->
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="index"><a href="index.php">หน้าแรก</a></li>
                        
                        <?php if(!isset($_SESSION["name"])){ ?>
                        <li><a href="#"  data-toggle="modal" data-target="#login">เข้าสู่ระบบ</a></li>
                        <li class="register"><a href="register.php">ลงทะเบียน</a></li>
                        <?php   }; ?>
                      
                        <?php if(isset($_SESSION["name"])){ ?>
                        <li class="edit"><a href="edit.php">ประวัติส่วนตัว</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#logout">ออกจากระบบ</a></li>
                        <?php   }; ?>

                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
        <div class="nav-item" style="background-color: #fff;">
        </div>
    </header>
    <!-- Header End -->