<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Document Management System | IBCP</title> <link rel="icon" href="<?php echo base_url(); ?>res/img/ibcp_32.png">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global css -->
    <link href="<?php echo base_url(); ?>res/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url(); ?>res/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>res/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="<?php echo base_url(); ?>res/css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>res/css/metisMenu.css" rel="stylesheet" type="text/css"/>
    
    <!-- end of global css -->
</head>

<body class="skin-josh">
    <header class="header">
        <a href="<?php echo base_url(); ?>" class="logo">
            <img src="<?php echo base_url(); ?>res/img/ibcp_dms.png" alt="logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img data-src="holder.js/35x35/#fff:#000" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                            <div class="riot">
                                <div>
                                    Riot
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img data-src="<?php echo base_url(); ?>res/holder.js/90x90/#fff:#000" class="img-responsive img-circle" alt="User Image">
                                <p class="topprofiletext">Riot Zeast</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="user" data-s="18"></i>
                                    My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="gears" data-s="18"></i>
                                    Account Settings
                                </a>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url(); ?>res/lockscreen.html">
                                        <i class="livicon" data-name="lock" data-s="18"></i>
                                        Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url(); ?>res/login.html">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                    </div>
                    <div class="clearfix"></div>
					<br>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                        <li class="active" id="active">
                            <a href="<?php echo base_url(); ?>res/dashboard.html">
                                <i class="livicon" data-name="home" data-size="18" data-c="#FFFFFF" data-hc="#FFFFFF" data-loop="true"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
						<li>
                            <a href="#">
                                <i class="livicon" data-name="users" data-size="18" data-c="#FFFFFF" data-hc="#FFFFFF" data-loop="true"></i>
                                <span class="title">Users</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right"></i>
                                        Users
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right"></i>
                                        Add New User
                                    </a>
                            </ul>
                        </li>
		<!--			<li>
                            <a href="#">
                                <i class="livicon" data-name="brush" data-c="#FFFFFF" data-hc="#FFFFFF" data-size="18" data-loop="true"></i>
                                <span class="title">Edit Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right"></i>
                                        Animated Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right"></i>
                                        Buttons
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="doc-portrait" data-c="#FFFFFF" data-hc="#FFFFFF" data-size="18" data-loop="true"></i>
                                <span class="title">Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url('applicant'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        Applicant
                                    </a>
                                </li>
                                <li>
                                    <a href="editor.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Member File 201
                                    </a>
                                </li>
                                <li>
                                    <a href="form_layout.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Disciplinary Records
                                    </a>
                                </li>
                                <li>
                                    <a href="validation.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Benefits
                                    </a>
                                </li>
                                <li>
                                    <a href="formelements.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Loans
                                    </a>
                                </li>
                                <li>
                                    <a href="form_layouts.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Annual Physical Exam
                                    </a>
                                </li>
                                <li>
                                    <a href="formwizard.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Clearance/Waiver Form
                                    </a>
                                </li>
                                <li>
                                    <a href="accordionformwizard.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Quit Claim
                                    </a>
                                </li>
                                <li>
                                    <a href="accordionformwizard.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        DTRs Only
                                    </a>
                                </li>
                                <li>
                                    <a href="accordionformwizard.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="accordionformwizard.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Request of Payments
                                    </a>
                                </li>
                                <li>
                                    <a href="accordionformwizard.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Liquidations
                                    </a>
                                </li>
                            </ul>
                        </li>

					    
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="search" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true" ></i>
                                <span class="title">Search</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="gallery.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        By File
                                    </a>
                                </li>
                                <li>
                                    <a href="masonry_gallery.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        By Form
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class>
                            <a href="#">
                                <i class="livicon" data-name="archive-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
								
                                <span class="title">Archive</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Archive Documents
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
        </aside>
        <aside class="right-side">
            <section class="content-header">
                <h1>Dashboard</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                <!--    <li>Pages</li>
                    <li class="active">Blank page</li> -->
                </ol>
            </section>
            <section class="content"></section>

        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="<?php echo base_url(); ?>res/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>res/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url(); ?>res/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>res/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>res/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>res/js/metisMenu.js" type="text/javascript"> </script>
    <script src="<?php echo base_url(); ?>res/vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
</body>
</html>
