<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:71:"D:\WWW\20180110\public/../application/admin\view\person\statistics.html";i:1516083043;s:67:"D:\WWW\20180110\public/../application/admin\view\public\header.html";i:1515568287;s:65:"D:\WWW\20180110\public/../application/admin\view\public\menu.html";i:1516083802;s:65:"D:\WWW\20180110\public/../application/admin\view\public\foot.html";i:1516081591;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="__PUBLIC__css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link href="__PUBLIC__css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="__PUBLIC__css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="__PUBLIC__css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="__PUBLIC__css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="__PUBLIC__css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="__PUBLIC__img/favicon.ico">
    <!-- end: Favicon -->




</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="../index/index.html"><span>重点车辆管理系统</span></a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">
                    <li class="dropdown hidden-phone">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-bell"></i>
								<span class="badge red">
								7 </span>
                        </a>
                        <ul class="dropdown-menu notifications">
                            <li class="dropdown-menu-title">
                                <span>You have 11 notifications</span>
                                <a href="#refresh"><i class="icon-repeat"></i></a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon blue"><i class="icon-user"></i></span>
                                    <span class="message">New user registration</span>
                                    <span class="time">1 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">7 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">8 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">16 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon blue"><i class="icon-user"></i></span>
                                    <span class="message">New user registration</span>
                                    <span class="time">36 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                    <span class="message">2 items sold</span>
                                    <span class="time">1 hour</span>
                                </a>
                            </li>
                            <li class="warning">
                                <a href="#">
                                    <span class="icon red"><i class="icon-user"></i></span>
                                    <span class="message">User deleted account</span>
                                    <span class="time">2 hour</span>
                                </a>
                            </li>
                            <li class="warning">
                                <a href="#">
                                    <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">6 hour</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">yesterday</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon blue"><i class="icon-user"></i></span>
                                    <span class="message">New user registration</span>
                                    <span class="time">yesterday</span>
                                </a>
                            </li>
                            <li class="dropdown-menu-sub-footer">
                                <a>View all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- start: Notifications Dropdown -->
                    <li class="dropdown hidden-phone">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-calendar"></i>
								<span class="badge red">
								5 </span>
                        </a>
                        <ul class="dropdown-menu tasks">
                            <li class="dropdown-menu-title">
                                <span>You have 17 tasks in progress</span>
                                <a href="#refresh"><i class="icon-repeat"></i></a>
                            </li>
                            <li>
                                <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                    <div class="taskProgress progressSlim red">80</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                    <div class="taskProgress progressSlim green">47</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                    <div class="taskProgress progressSlim yellow">32</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                    <div class="taskProgress progressSlim greenLight">63</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                    <div class="taskProgress progressSlim orange">80</div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-menu-sub-footer">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: Notifications Dropdown -->
                    <!-- start: Message Dropdown -->
                    <li class="dropdown hidden-phone">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-envelope"></i>
								<span class="badge red">
								4 </span>
                        </a>
                        <ul class="dropdown-menu messages">
                            <li class="dropdown-menu-title">
                                <span>You have 9 messages</span>
                                <a href="#refresh"><i class="icon-repeat"></i></a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="avatar"><img src="__PUBLIC__img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="avatar"><img src="__PUBLIC__img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="avatar"><img src="__PUBLIC__img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="avatar"><img src="__PUBLIC__img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="avatar"><img src="__PUBLIC__img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-menu-sub-footer">View all messages</a>
                            </li>
                        </ul>
                    </li>

                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> Dennis Ji
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                            <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>

<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="<?php echo url('admin/record/dataList'); ?>"><i class="icon-bar-chart"></i><span class="hidden-tablet">主页</span></a></li>
            <li><a href="<?php echo url('admin/company/companyMg'); ?>"><i class="icon-calendar"></i><span class="hidden-tablet">企业管理</span></a></li>
            <li><a href="<?php echo url('admin/person/widgets'); ?>"><i class="icon-dashboard"></i><span class="hidden-tablet">动态管控</span></a></li>
            <li><a href="<?php echo url('admin/person/statistics'); ?>"><i class="icon-align-justify"></i><span class="hidden-tablet">统计分析</span></a></li>
            <li><a href="<?php echo url('admin/record/dataList'); ?>"><i class="icon-edit"></i><span class="hidden-tablet">报备录入</span></a></li>
            <li><a href="<?php echo url('admin/company/dataList'); ?>"><i class="icon-list-alt"></i><span class="hidden-tablet">企业录入</span></a></li>
            <li><a href="<?php echo url('admin/truck/dataList'); ?>"><i class="icon-tasks"></i><span class="hidden-tablet">车辆录入</span></a></li>
            <li><a href="<?php echo url('admin/person/dataList'); ?>"><i class="icon-eye-open"></i><span class="hidden-tablet">人员录入</span></a></li>

        </ul>
    </div>
</div>

        <!-- end: Main Menu -->

        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>

        <!-- start: Content -->
        <div id="content" class="span10">


            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">统计分析</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="#">图表</a></li>
            </ul>

            <div class="row-fluid">

                <div class="box">
                    <div class="box-header">
                        <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>数据可视化展示 </h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div id="sincos"  class="center" style="height:300px;" ></div>
                        <p id="hoverdata">Mouse position at (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header">
                        <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>各监测点位通行数量 </h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div id="flotchart" class="center" style="height:300px"></div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header">
                        <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>多点位对比统计图表    </h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div id="stackchart" class="center" style="height:300px;"></div>

                        <p class="stackControls center">
                            <input class="btn" type="button" value="With stacking">
                            <input class="btn" type="button" value="Without stacking">
                        </p>

                        <p class="graphControls center">
                            <input class="btn-primary" type="button" value="Bars">
                            <input class="btn-primary" type="button" value="Lines">
                            <input class="btn-primary" type="button" value="Lines with steps">
                        </p>
                    </div>
                </div>

            </div><!--/row-->

            <div class="row-fluid sortable">
                <div class="box span6">
                    <div class="box-header">
                        <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>按车号布防查控   </h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div id="piechart" style="height:300px"></div>
                    </div>
                </div>

                <div class="box span6">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Donut</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div id="donutchart" style="height: 300px;"></div>
                    </div>
                </div>

            </div><!--/row-->

            <hr>

            <div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Realtime</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div id="realtimechart" style="height:190px;"></div>
                        <p>You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
                        <p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds</p>
                    </div>
                </div>
            </div><!--/row-->

            <div class="row-fluid">

                <div class="widget span6" onTablet="span6" onDesktop="span6">
                    <h2><span class="glyphicons facebook"><i></i></span>Facebook Fans</h2>
                    <hr>
                    <div class="content">
                        <div id="facebookChart" style="height:300px" ></div>
                    </div>
                </div><!--/span-->

                <div class="widget span6" onTablet="span6" onDesktop="span6">
                    <h2><span class="glyphicons twitter"><i></i></span>Twitter Followers</h2>
                    <hr>
                    <div class="content">
                        <div id="twitterChart" style="height:300px" ></div>
                    </div>
                </div><!--/span-->

            </div>



        </div><!--/.fluid-container-->

        <!-- end: Content -->
    </div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>
<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <ul class="list-inline item-details">
            <li><a href="#">Admin templates</a></li>
            <li><a href="http://themescloud.org">Bootstrap themes</a></li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>

<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2018 <a href="downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">淄博交警</a></span>

    </p>

</footer>

<!-- start: JavaScript-->
<script src="__PUBLIC__js/jquery-1.9.1.min.js"></script>
<script src="__PUBLIC__js/jquery-migrate-1.0.0.min.js"></script>

<script src="__PUBLIC__js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="__PUBLIC__js/jquery.ui.touch-punch.js"></script>

<script src="__PUBLIC__js/modernizr.js"></script>

<script src="__PUBLIC__js/bootstrap.min.js"></script>

<script src="__PUBLIC__js/jquery.cookie.js"></script>

<script src='__PUBLIC__js/fullcalendar.min.js'></script>

<script src='__PUBLIC__js/jquery.dataTables.min.js'></script>

<script src="__PUBLIC__js/excanvas.js"></script>
<script src="__PUBLIC__js/jquery.flot.js"></script>
<script src="__PUBLIC__js/jquery.flot.pie.js"></script>
<script src="__PUBLIC__js/jquery.flot.stack.js"></script>
<script src="__PUBLIC__js/jquery.flot.resize.min.js"></script>

<script src="__PUBLIC__js/jquery.chosen.min.js"></script>

<script src="__PUBLIC__js/jquery.uniform.min.js"></script>

<script src="__PUBLIC__js/jquery.cleditor.min.js"></script>

<script src="__PUBLIC__js/jquery.noty.js"></script>

<script src="__PUBLIC__js/jquery.elfinder.min.js"></script>

<script src="__PUBLIC__js/jquery.raty.min.js"></script>

<script src="__PUBLIC__js/jquery.iphone.toggle.js"></script>

<script src="__PUBLIC__js/jquery.uploadify-3.1.min.js"></script>

<script src="__PUBLIC__js/jquery.gritter.min.js"></script>

<script src="__PUBLIC__js/jquery.imagesloaded.js"></script>

<script src="__PUBLIC__js/jquery.masonry.min.js"></script>

<script src="__PUBLIC__js/jquery.knob.modified.js"></script>

<script src="__PUBLIC__js/jquery.sparkline.min.js"></script>

<script src="__PUBLIC__js/counter.js"></script>

<script src="__PUBLIC__js/retina.js"></script>

<script src="__PUBLIC__js/custom.js"></script>
<!-- end: JavaScript-->

</body>
</html>