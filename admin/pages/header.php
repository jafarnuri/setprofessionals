<?php 
include '../netting/baglan.php';


$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
  'id' => 1
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);



 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $ayarcek['ayar_title'] ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="../pages/index.php" class="active"><i class="fa fa-dashboard fa-fw"></i>
                                Salam</a>
                        </li>
    
                        <li>
                            <a href="../pages/connect.php"><i class="fa fa-wrench fa-fw"></i> connect
                                </a>
                        </li>
                        <li>
                            <a href="../pages/kullaniciduzenle.php"><i class="fa fa-wrench fa-fw"></i> kullanici
                                </a>
                        </li>
                        <li>
                            <a href="../pages/suallar.php"><i class="fa fa-wrench fa-fw"></i>
                                Suallar</a>
                        </li>
    
                        <li>
                            <a href="../pages/partnyorlar.php"><i class="fa fa-wrench fa-fw"></i>
                                Partnyorlar</a>
                        </li>
                        <li>
                            <a href="../pages/post.php"><i class="fa fa-wrench fa-fw"></i> Post</a>
                        </li>
                        <li>
                            <a href="../pages/mektublar.php"><i class="fa fa-wrench fa-fw"></i>
                                Mektublar</a>
                        </li>
                        <li>
                            <a href="../pages/haqqimizda.php"><i class="fa fa-wrench fa-fw"></i>
                                Haqqimizda</a>
                        </li>
                        <li>
                            <a href="../pages/yorumlar.php"><i class="fa fa-wrench fa-fw"></i> Yorumlar
                            </a>
                        </li>
                       
    
                    </ul>
                </div>
            </div>

