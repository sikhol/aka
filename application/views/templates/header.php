<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aromaterapi</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets/vendor/morrisjs/morris.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.css') ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->


        <script src="<?php echo base_url('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') ?>"></script>
        <script src="<?php echo base_url('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/morrisjs/morris.min.js') ?>"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#4576D7; border-color:#4576D7;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color:white;"> Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->

                <!-- /.dropdown -->
                <li><a href="<?php echo base_url ("login/logout");?>"  style="color:white;"><i class="fa fa-sign-out fa-fw" style="color:white;"></i> Logout</a>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url ("admin/index");?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin/about");?>"><i class="fa fa-table fa-fw"></i> About</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin/feature");?>"><i class="fa fa-table fa-fw"></i> Features</a>
                        </li>


                        <li>
                            <a href="<?php echo base_url("admin/table");?>"><i class="fa fa-table fa-fw"></i> Data Barang</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin/kategori");?>"><i class="fa fa-table fa-fw"></i> Kategori</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin/datatest");?>"><span class="glyphicons glyphicons-scale-classic"></span> Testimoni</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url("admin/kontak");?>"><i class="glyphicon glyphicon-envelope"></i> Kontak</a>
                        </li>





                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
