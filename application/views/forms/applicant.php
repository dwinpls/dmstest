<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Applicant Form | DMS</title> <link rel="icon" href="<?php echo base_url(); ?>res/img/ibcp_32.png">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="<?php echo base_url(); ?>res/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url(); ?>res/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>res/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="<?php echo base_url(); ?>res/css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>res/css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>res/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>res/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen" />
	<link href="<?php echo base_url(); ?>res/css/pages/form2.css"  rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>res/css/pages/form3.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>res/vendors/validation/dist/css/bootstrapValidator.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>res/vendors/modal/css/component.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>res/css/pages/toastr.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>res/vendors/toastr/toastr.css" rel="stylesheet" type="text/css" />

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
                                <img data-src="holder.js/90x90/#fff:#000" class="img-responsive img-circle" alt="User Image">
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
                                    <a href="lockscreen.html">
                                        <i class="livicon" data-name="lock" data-s="18"></i>
                                        Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="login.html">
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
                        <li>
                            <a href="<?php echo base_url(); ?>">
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
                        <li class="active">
                            <a href="#">
                                <i class="livicon" data-name="doc-portrait" data-c="#FFFFFF" data-hc="#FFFFFF" data-size="18" data-loop="true"></i>
                                <span class="title">Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="active" id="active">
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
                <h1>Applicant Form</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                            Forms
                        </a>
                    </li>
                  <!--  <li>Pages</li> -->
                    <li class="active">Applicant Form</li> 
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <!--row starts-->
                    <!--md-6 ends-->
                    <div class="col-md-8">
                        <!--md-6 starts-->
                        <!--form control starts-->
                        <div class="panel panel-success" id="hidepanel1">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                    Application Form
                                </h3>
                            </div>
                            <div class="panel-body"><!---->
                                <form class="form-horizontal" onsubmit="return appValid(); return false;" id="appForm" name="appForm" method="post" autocomplete="off" enctype="mulitpart/form-data">
                                    <fieldset>
                                        <div class="form-group" id="fl" onchange="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="name">File Upload</label>
                                            <div class="col-md-9">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput">
                                                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                        <span class="fileinput-filename"></span>
                                                    </div>
                                                    <span class="input-group-addon btn btn-default btn-file">
                                                        <span class="fileinput-new" id="selectfile">Select file</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="fle" id="SelectedFile" accept="image/png,image/jpeg, application/pdf">
                                                    </span>
                                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" onclick="previewpdf()");>Preview</a>
                                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- Name input-->
                                        <div class="form-group" id="fn" onkeypress="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="firstname">First Name</label>
                                            <div class="col-md-9">
                                                <input id="firstname" name="firstname" type="text" placeholder="First Name" class="form-control" style="text-transform:uppercase;" on keyup="javascript:this.value=this.value.toUpperCase();" ></div>
                                        </div>
                                        <!-- Email input-->
                                        <div class="form-group" id="mn" onkeypress="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="email">Middle Name</label>
                                            <div class="col-md-9">
                                                <input id="middlename" name="middlename" type="text" placeholder="Middle Name" class="form-control" style="text-transform:uppercase;" on keyup="javascript:this.value=this.value.toUpperCase();" ></div>
                                        </div>
                                        <!-- Message body -->
                                        <div class="form-group" id="ln" onkeypress="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="email">Last Name</label>
                                            <div class="col-md-9">
                                                <input id="lastname" name="lastname" type="text" placeholder="Last Name" class="form-control" style="text-transform:uppercase;" on keyup="javascript:this.value=this.value.toUpperCase();"></div>
                                        </div>
                                        <div class="form-group" id="bd" onchange="this.className = 'form-group'">
											<label class="col-md-3 control-label" for="e1">Birthday</label>
											<div class="col-md-3">
												<select id="b_month" class="col-md-2 form-control select2">
                                                        <option value="">Month</option>
                                                        <option value="01">Jan</option>
                                                        <option value="02">Feb</option>
                                                        <option value="03">Mar</option>
                                                        <option value="04">Apr</option>
                                                        <option value="05">May</option>
                                                        <option value="06">Jun</option>
                                                        <option value="07">Jul</option>
                                                        <option value="08">Aug</option>
                                                        <option value="09">Sep</option>
                                                        <option value="10">Oct</option>
                                                        <option value="11">Nov</option>
                                                        <option value="12">Dec</option>
                                                </select>
											</div>
											<div class="col-md-3">
												<select id="b_date" class="col-md-9 form-control select2">
                                                        <option value="">Date</option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                </select>
											</div>
											<div class="col-md-3">
												<select id="b_year" class="col-md-9 form-control select2">
                                                        <option value="">Year</option>
                                                        <option value="1956">1956</option>
                                                        <option value="1957">1957</option>
                                                        <option value="1958">1958</option>
                                                        <option value="1959">1959</option>
                                                        <option value="1950">1960</option>
                                                        <option value="1961">1961</option>
                                                        <option value="1962">1962</option>
                                                        <option value="1963">1963</option>
                                                        <option value="1964">1964</option>
                                                        <option value="1965">1965</option>
														<option value="1966">1966</option>
                                                        <option value="1967">1967</option>
														<option value="1968">1968</option>
														<option value="1969">1969</option>
                                                        <option value="1970">1970</option>
                                                        <option value="1971">1971</option>
                                                        <option value="1972">1972</option>
                                                        <option value="1973">1973</option>
                                                        <option value="1974">1974</option>
														<option value="1975">1975</option>
                                                        <option value="1976">1976</option>
                                                        <option value="1977">1977</option>
														<option value="1978">1978</option>
														<option value="1979">1979</option>
                                                        <option value="1980">1980</option>
                                                        <option value="1981">1981</option>
                                                        <option value="1982">1982</option>
                                                        <option value="1983">1983</option>
                                                        <option value="1984">1984</option>
                                                        <option value="1985">1985</option>
														<option value="1986">1986</option>
                                                        <option value="1987">1987</option>
														<option value="1988">1988</option>
														<option value="1989">1989</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1995">1995</option>
														<option value="1996">1996</option>
                                                        <option value="1997">1997</option>
														<option value="1998">1998</option>
														<option value="1999">1999</option>
														<option value="2000">2000</option>
														<option value="2001">2001</option>
														<option value="2002">2002</option>
														<option value="2003">2003</option>
														<option value="2004">2004</option>
														<option value="2005">2005</option>
														<option value="2006">2006</option>
														<option value="2007">2007</option>
														<option value="2008">2008</option>
														<option value="2009">2009</option>
														<option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                </select>
											</div>
                                        </div>
                                        <div class="form-group" id="ad" onkeypress="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="address">Address (Street)</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="address" name="address" placeholder="House No./Street Number, Street Name, Subdivision/Village, Barangay, City/District" rows="2" style="text-transform:uppercase;" on keyup="javascript:this.value=this.value.toUpperCase();"></textarea></div>
                                        </div>
                                        <div class="form-group" id="as" onchange="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="e1">Address (State/<br>Municipality)</label>
                                            <div class="col-md-9">
                                                <select id="addressState" class="col-md-2 form-control select2">
                                                    <option value=" ">State/Municipality</option>
                                                    <?php 
                                                        foreach ($sql_add as $row)
                                                        {
                                                            echo "<option value=".$row->form_addStateID.">".$row->form_addStatedesc."</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" id="cn" onkeypress="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="height">Contact Number</label>
                                            <div class="col-md-9">
                                                <input id="contactno" name="contactno" type="text" placeholder="Contact Number" class="form-control" minlength="5" maxlength="15"></div>
                                        </div> 
                                        <div class="form-group" id="gn" onchange="this.className = 'form-group'">
											<label class="col-md-3 control-label" for="e1">Gender</label>
											<div class="col-md-9">
												<select id="gender" class="col-md-2 form-control select2">
                                                        <option value=" ">Gender</option>
                                                        <?php 
                                                        foreach ($sql_gen as $row)
                                                        {
                                                            echo "<option value=".$row->form_genderID.">".$row->form_genderdesc."</option>";
                                                        }
                                                        ?>
                                                </select>
											</div>
										</div>
                                        <div class="form-group" id="cs" onchange="this.className = 'form-group'">
											<label class="col-md-3 control-label" for="e1">Civil Status</label>
											<div class="col-md-9">
												<select id="civilstatus" class="col-md-2 form-control select2">
                                                        <option value=" ">Civil Status</option>
                                                        <?php 
                                                        foreach ($sql_cvs as $row)
                                                        {
                                                            echo "<option value=".$row->form_civilID.">".$row->form_civildesc."</option>";
                                                        }
                                                        ?>
                                                </select>
											</div>
										</div>
                                        <div class="form-group" id="rl" onchange="this.className = 'form-group'">
											<label class="col-md-3 control-label" for="e1">Religion</label>
											<div class="col-md-9">
												<select id="religion" class="col-md-2 form-control select2">
                                                        <option value=" ">Religion</option>
                                                        <?php 
                                                        foreach ($sql_rel as $row)
                                                        {
                                                            echo "<option value=".$row->form_religionID.">".$row->form_religionDesc."</option>";
                                                        }
                                                        ?>
                                                </select>
											</div>
										</div>
                                        <div class="form-group" id="ht" onkeypress="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="height">Height (cm)</label>
                                            <div class="col-md-9">
                                                <input id="height" name="height" type="text" placeholder="Height (in centimeters)" class="form-control" ></div>
                                        </div> 											
                                        <div class="form-group" id="ca" onchange="this.className = 'form-group'">
											<label class="col-md-3 control-label" for="e1">Clients Assigned</label>
											<div class="col-md-9">
												<select id="clientsAssigned" class="col-md-2 form-control select2">
                                                       <option value=" ">Clients Assigned</option> 
                                                        <?php 
                                                        foreach ($sql_cla as $row)
                                                        {
                                                            echo "<option value=".$row->form_clientAssignedID.">".$row->form_clientAssigneddesc."</option>";
                                                        }
                                                        ?>
                                                </select>
											</div>
										</div>
                                        <div class="form-group" id="ex" onchange="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="e1">Exam Status</label>
                                            <div class="col-md-9">
                                                <select id="examStatus" class="col-md-2 form-control select2">
                                                        <option value=" ">Exam Status</option>
                                                        <?php 
                                                        foreach ($sql_est as $row)
                                                        {
                                                            echo "<option value=".$row->form_examStatusID.">".$row->form_examStatusdesc."</option>";
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" id="ed" onchange="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="e1">Educational Attainment</label>
                                            <div class="col-md-9">
                                                <select id="educAttain" class="col-md-2 form-control select2">
                                                        <option value=" ">Educational Attainment</option>
                                                        <?php 
                                                        foreach ($sql_eda as $row)
                                                        {
                                                            echo "<option value=".$row->form_educationAttainID.">".$row->form_educationAttaindesc."</option>";
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" id="co" onkeypress="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="course">Course</label>
                                            <div class="col-md-9">
                                                <input id="course" name="course" type="text" placeholder="Course" class="form-control" style="text-transform:uppercase;" on keyup="javascript:this.value=this.value.toUpperCase();"></div>
                                        </div>
                                        <div class="form-group" id="we" onkeypress="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="workexp">Work Experience</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="workexp" name="message" placeholder="Work Experience" rows="3" style="text-transform:uppercase;" on keyup="javascript:this.value=this.value.toUpperCase();"></textarea></div>
                                        </div>
                                        <div class="form-group" id="sk" onkeypress="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="skills">Skills</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="skills" name="message" placeholder="Skills" rows="2" style="text-transform:uppercase;" on keyup="javascript:this.value=this.value.toUpperCase();"  ></textarea></div>
                                        </div>
                                        <div class="form-group" id="da" onchange="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="e1">Date Applied</label>
                                            <div class="col-md-3">
                                                <select id="da_month" class="col-md-2 form-control select2">
                                                        <option value="">Month</option>
                                                        <option value="01">Jan</option>
                                                        <option value="02">Feb</option>
                                                        <option value="03">Mar</option>
                                                        <option value="04">Apr</option>
                                                        <option value="05">May</option>
                                                        <option value="06">Jun</option>
                                                        <option value="07">Jul</option>
                                                        <option value="08">Aug</option>
                                                        <option value="09">Sep</option>
                                                        <option value="10">Oct</option>
                                                        <option value="11">Nov</option>
                                                        <option value="12">Dec</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select id="da_date" class="col-md-9 form-control select2">
                                                        <option value="">Date</option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select id="da_year" class="col-md-9 form-control select2">
                                                        <option value="">Year</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2000">2000</option>
                                                        <option value="1999">1999</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" id="pl" onchange="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="e1">Pleasing Personality</label>
                                            <div class="col-md-9">
                                                <select id="pleasing" class="col-md-2 form-control select2">
                                                        <option value="">Pleasing Personality</option>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" id="ast" onchange="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="e1">Applicant Status</label>
                                            <div class="col-md-9">
                                                <select id="appStatus" class="col-md-2 form-control select2">
                                                        <option value="">Applicant Status</option>
                                                        <?php 
                                                        foreach ($sql_aps as $row)
                                                        {
                                                            echo "<option value=".$row->form_applicantStatusID.">".$row->form_applicantStatusdesc."</option>";
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" id="it" onkeypress="this.className = 'form-group'">
                                            <label class="col-md-3 control-label" for="interview">Interview Remarks</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="interview" name="message" placeholder="Interview Remarks" rows="3" style="text-transform:uppercase;" on keyup="javascript:this.value=this.value.toUpperCase();"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 text-right">
                                                <button type="submit" class="btn btn-responsive btn-primary btn-sm" data-modal="modal-19" id="submit" name="submit" value="Submit">Submit</button>
                                            </div>
                                        </div>
                                    </fieldset>
                <div class="md-modal md-effect-1" id="modal-19">
                    <div class="md-content md-content-white">
                        <h3>Confirmation</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <td>
                            <button class="btn btn-modal btn-default" onclick="closeMod()" id="cancel">Cancel</button>

                            <button class="btn btn-modal btn-primary" onclick="conMod()" id="confirm">Confirm</button></td>
                        </div>
                    </div>
                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
			</section>
        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <script src="<?php echo base_url(); ?>res/js/appform.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>res/js/pages/previewpdf.js" type="text/javascript" ></script>
    <!-- global js -->
    <script src="<?php echo base_url(); ?>res/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>res/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url(); ?>res/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>res/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>res/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>res/js/metisMenu.js" type="text/javascript"> </script>
    <script src="<?php echo base_url(); ?>res/vendors/holder-master/holder.js" type="text/javascript"></script>
	<!--datetime picker-->
    <script src="<?php echo base_url(); ?>res/vendors/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url(); ?>res/vendors/validation/dist/js/bootstrapValidator.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url(); ?>res/vendors/toastr/toastr.min.js"></script>
    <script src="<?php echo base_url(); ?>res/vendors/toastr/ui-toastr.js"></script>
    <script src="<?php echo base_url(); ?>res/js/pages/validation.js" type="text/javascript" ></script>
    <script src="<?php echo base_url(); ?>res/vendors/modal/js/classie.js"></script>
    <script src="<?php echo base_url(); ?>res/vendors/modal/js/modalEffects.js"></script>
    <!-- end of global js -->
</body>
</html>
