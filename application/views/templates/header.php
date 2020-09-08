<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">

		<title>ALTIE MEDIA | BACKEND</title>

        <link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

	    <link href="<?php echo base_url() ?>/assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>/assets/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>/assets/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>/assets/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>/assets/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>/assets/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url() ?>/assets/assets/js/modernizr.min.js"></script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>almed</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>


                            <ul class="nav navbar-nav navbar-right pull-r ight">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">user</a>
                                    <ul class="dropdown-menu">
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Menu</li>

                            <li class="has_sub">
                                <a href="<?php echo base_url() ?>back/home" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="<?php echo base_url() ?>back/jadwal" class="waves-effect"><i class="ti-home"></i> <span> Jadwal </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="<?php echo base_url() ?>back/video" class="waves-effect"><i class="ti-home"></i> <span> video </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="<?php echo base_url() ?>back/galeri" class="waves-effect"><i class="ti-home"></i> <span> Galeri </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="<?php echo base_url() ?>back/Blog" class="waves-effect"><i class="ti-home"></i> <span> Blog </span></a>
                            </li>


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
			<!-- Left Sidebar End -->

