
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Prasun Nandy Pritam">
        <meta name="linkedin" content="https://www.linkedin.com/in/pritamnandy/">
        <meta name="keyword" content="HeyDev, Prasun Nandy Pritam, Scheduler, Management, CodeIgniter 3, upwork">
        <link rel="shortcut icon" href="<?php echo site_url('uploads/schedule.png'); ?>">

        <title><?php echo $settings->title; ?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo site_url('common/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo site_url('common/css/bootstrap-reset.css'); ?>" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo site_url('common/assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
        <!--
        <link href="<?php echo site_url('common/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css'); ?>" rel="stylesheet" type="text/css" media="screen"/>
        <link rel="stylesheet" href="<?php echo site_url('common/css/owl.carousel.css'); ?>" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('common/assets/bootstrap-datepicker/css/datepicker.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('common/assets/bootstrap-daterangepicker/daterangepicker-bs3.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('common/assets/bootstrap-daterangepicker/daterangepicker.css'); ?>" />
        
        -->

        <link rel="stylesheet" type="text/css" href="<?php echo site_url('common/assets/bootstrap-datepicker/css/datepicker.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('common/assets/bootstrap-colorpicker/css/colorpicker.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('common/assets/bootstrap-timepicker/compiled/timepicker.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('common/assets/bootstrap-datetimepicker/css/datetimepicker.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('common/assets/colorpicker/css/bootstrap-colorpicker.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('common/assets/jquery-multi-select/css/multi-select.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('common/assets/select2/css/select2.min.css'); ?>"/>

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <!--right slidebar-->
        <link href="<?php echo site_url('common/css/slidebars.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css"/>


        <!-- Custom styles for this template -->

        <link href="<?php echo site_url('common/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo site_url('common/css/style-responsive.css'); ?>" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,800&display=swap" rel="stylesheet">


        <!--[if lte IE 8]>
                <link href="/print.css" rel="stylesheet" media="print" type="text/css" />
        <link rel="stylesheet" media="print" href="/print.css" type="text/css" />
        <![endif]-->
        <style>
            body {
                font-family: 'Raleway' !important;
                font-size: 16px !important;
            }

            .site-footer {
                z-index: -1;
            }
            
            .message p {
                margin-top: 9px;
                margin-bottom: 0px;
            }
        </style>

    </head>

    <body class="light-sidebar-nav">

        <section id="container">
            <!--header start-->
            <header class="header white-bg">
                <div class="sidebar-toggle-box">
                    <i class="fa fa-bars"></i>
                </div>
                <!--logo start-->
                <a href="<?php echo base_url(); ?>" class="logo"><!--<?php echo $settings->title; ?>-->Scheduler</a>
                <!--logo end-->
                <div class="top-nav ">
                    <!--search & user info start-->
                    <ul class="nav pull-right top-menu">
                        <?php
                        if (!empty($this->session->flashdata('message'))) {
                            ?>
                        <div class="message btn-info" style="padding: 0 10px; border-radius: 4px;">
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                            <?php
                        }
                        ?>
                        <li>
                            <input type="text" class="form-control search" placeholder="Search">
                        </li>
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="<?php echo site_url('uploads/admin.png'); ?>" width="30px">
                                <?php
                                $userId = $this->ion_auth->get_user_id();
                                $this->db->where('id', $userId);
                                $system_user = $this->db->get('users')->row()->username;
                                ?>
                                <span class="username"><?php echo $system_user; ?></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout dropdown-menu-right">
                                <div class="log-arrow-up"></div>
                                <li><a href="<?php echo site_url('profile'); ?>"><i class=" fa fa-suitcase"></i>Profile</a></li>
                                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                                <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                                <li><a href="<?php echo site_url('auth/logout'); ?>"><i class="fa fa-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!--search & user info end-->
                </div>
            </header>
            <!--header end-->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="index.html">
                                <i class="fa fa-dashboard"></i>
                                <span><?php echo lang('dashboard'); ?></span>
                            </a>
                        </li>

						<li>
							<a href="<?php echo site_url('dayinfo/addDayInfoView'); ?>">
								<i class="fa fa-sun-o"></i>
								<span><?php echo lang('day_info'); ?></span>
							</a>
						</li>

						<li>
							<a  href="<?php echo site_url('event/addEvent'); ?>">
								<i class="fa fa-calendar"></i>
								<span><?php echo "Daily events"; ?></span>
							</a>
						</li>

<!--                        <li class="sub-menu">-->
<!--                            <a href="javascript:;" >-->
<!--                                <i class="fa fa-calendar"></i>-->
<!--                                <span>--><?php //echo lang('events'); ?><!--</span>-->
<!--                            </a>-->
<!--                            <ul class="sub">-->
<!---->
<!---->
<!--                            </ul>-->
<!--                        </li>-->

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-sitemap"></i>
                                <span><?php echo lang('report'); ?></span>
                            </a>
                            <ul class="sub">
                                <li><a href="<?php echo site_url('report'); ?>"><?php echo lang('event') . " " . lang('report'); ?></a></li>
                            </ul>
                        </li>

						<li class="sub-menu">
							<a href="javascript:;" >
								<i class="fa fa-cogs"></i>
								<span><?php echo lang('settings'); ?></span>
							</a>
							<ul class="sub">
								<li>
									<a  href="<?php echo site_url('event/eventTypes'); ?>">
										<span><?php echo lang('event') . " " . lang('types'); ?></span>
									</a>
								</li>
								<li>
									<a  href="<?php echo site_url('event/dayHeading'); ?>">
										<span><?php echo lang('day') . " " . lang('heading'); ?></span>
									</a>
								</li>
								<li>
									<a  href="<?php echo site_url('event/location'); ?>">
										<span><?php echo lang('location'); ?></span>
									</a>
								</li>
								<li>
									<a  href="<?php echo site_url('report/defaultDate'); ?>">
										<span><?php echo "Default Date"; ?></span>
									</a>
								</li>
							</ul>
						</li>
<!--                        <li>-->
<!--                            <a href="#">-->
<!--                                <i class="fa fa-cogs"></i>-->
<!--                                <span>--><?php //echo lang('settings'); ?><!--</span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--						<li>-->
<!--							<a  href="--><?php //echo site_url('event/eventTypes'); ?><!--">-->
<!--								<i class="fa fa-calendar"></i>-->
<!--								<span>--><?php //echo lang('event') . " " . lang('types'); ?><!--</span>-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a  href="--><?php //echo site_url('event/dayHeading'); ?><!--">-->
<!--								<i class="fa fa-calendar-o"></i>-->
<!--								<span>--><?php //echo lang('day') . " " . lang('heading'); ?><!--</span>-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a  href="--><?php //echo site_url('event/location'); ?><!--">-->
<!--								<i class="fa fa-building-o"></i>-->
<!--								<span>--><?php //echo lang('location'); ?><!--</span>-->
<!--							</a>-->
<!--						</li>-->
                        <li>
                            <a href="<?php echo site_url('profile'); ?>">
                                <i class="fa fa-user"></i>
                                <span><?php echo lang('profile'); ?></span>
                            </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->


