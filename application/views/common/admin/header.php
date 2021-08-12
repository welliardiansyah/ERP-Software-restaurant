<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title><?php if(isset($pagetitle)) echo $pagetitle;?> | <?php echo get_languageword('admin_panel');?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo get_fevicon();?>">

        <!-- Bootstrap Css -->
        <link href="<?= base_url() ?>public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url() ?>public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= base_url() ?>public/assets/css/app.min.css" rel="stylesheet" />

    </head>
<body>
   <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="<?php echo SITEURL;?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo get_second_site_logo();?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo get_second_site_logo();?>" alt="" height="20">
                                </span>
                            </a>

                            <a href="<?php echo SITEURL;?>" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo get_second_site_logo();?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo get_second_site_logo();?>" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="uil-search"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="uil-search"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?php $languages = get_language_opts(); 
                        	if(!empty($languages)) {
                        		?>
                        <div class="dropdown d-inline-block language-switch">
                            <button type="button" class="btn header-item waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= base_url() ?>public/assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                        	
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <?php foreach ($languages as $key => $value) { ?>
                                <a href="<?php echo URL_CHANGE_LANGUAGE.'/'.$key;?>">
                                	<span class="align-middle"><?php if($this->config->item('site_settings')->site_language == $key); ?> <?php echo $value;?></span>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="uil-minus-path"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo get_user_image();?>"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">
                                	<?php 
                                	$user=getUserRec();
                                	echo $user->username;?>
                                </span>
                                <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="<?php echo URL_ADMIN_PROFILE;?>">
                                	<i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> 
                                	<span class="align-middle"><?php echo get_languageword('profile');?></span>
                                </a>

                                <a class="dropdown-item" href="<?php echo URL_ADMIN_CHANGE_PASSWORD;?>">
                                	<i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> 
                                	<span class="align-middle"><?php echo get_languageword('change_password');?> </span>
                                </a>

                                <a class="dropdown-item" href="<?php echo URL_ADMIN_ORDERS_OVERVIEW;?>">
                                	<i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> 
                                	<span class="align-middle"><?php echo get_languageword('orders_overview');?></span>
                                </a>

                                <a class="dropdown-item" href="<?php echo URL_AUTH_LOGOUT;?>">
                                	<i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> 
                                	<span class="align-middle"><?php echo get_languageword('logout');?></span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="uil-cog"></i>
                            </button>
                        </div>
            
                    </div>
                </div>
            </header>
