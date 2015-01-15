<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="../../widgets/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../widgets/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../widgets/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- demo style -->
        <style type="text/css">
            /* FROM HTTP://WWW.GETBOOTSTRAP.COM
             * Glyphicons
             *
             * Special styles for displaying the icons and their classes in the docs.
             */

            .bs-glyphicons {
                padding-left: 0;
                padding-bottom: 1px;
                margin-bottom: 20px;
                list-style: none;
                overflow: hidden;
            }
            .bs-glyphicons li {
                float: left;
                width: 25%;
                height: 115px;
                padding: 10px;
                margin: 0 -1px -1px 0;
                font-size: 12px;
                line-height: 1.4;
                text-align: center;
                border: 1px solid #ddd;
            }
            .bs-glyphicons .glyphicon {
                margin-top: 5px;
                margin-bottom: 10px;
                font-size: 24px;
            }
            .bs-glyphicons .glyphicon-class {
                display: block;
                text-align: center;
                word-wrap: break-word; /* Help out IE10+ with class names */
            }
            .bs-glyphicons li:hover {
                background-color: rgba(86,61,124,.1);
            }

            @media (min-width: 768px) {
                .bs-glyphicons li {
                    width: 12.5%;
                }
            }
        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="../../index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="../widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                                <li><a href="../charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                                <li><a href="../charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                                <li class="active"><a href="icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                                <li><a href="buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                                <li><a href="sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                                <li><a href="timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                                <li><a href="../forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                                <li><a href="../forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                                <li><a href="../tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="../mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="../examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="../examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="../examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="../examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="../examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="../examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Icons
                        <small>a set of beautiful icons</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">UI</a></li>
                        <li class="active">Icons</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class='row'>
                        <div class='col-xs-12'>
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#fa-icons" data-toggle="tab">Font Awesome</a></li>
                                    <li><a href="#glyphicons" data-toggle="tab">Glyphicons</a></li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Font Awesome icons -->
                                    <div class="tab-pane active" id="fa-icons" >
                                        <section id="new">
                                            <h2 class="page-header">40 New Icons in 4.2</h2>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-angellist"></i> fa-angellist</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-area-chart"></i> fa-area-chart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-at"></i> fa-at</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bell-slash"></i> fa-bell-slash</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bell-slash-o"></i> fa-bell-slash-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bicycle"></i> fa-bicycle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-binoculars"></i> fa-binoculars</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-birthday-cake"></i> fa-birthday-cake</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bus"></i> fa-bus</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-calculator"></i> fa-calculator</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc"></i> fa-cc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-amex"></i> fa-cc-amex</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-discover"></i> fa-cc-discover</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-mastercard"></i> fa-cc-mastercard</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-paypal"></i> fa-cc-paypal</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-stripe"></i> fa-cc-stripe</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-visa"></i> fa-cc-visa</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-copyright"></i> fa-copyright</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-eyedropper"></i> fa-eyedropper</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-futbol-o"></i> fa-futbol-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-google-wallet"></i> fa-google-wallet</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ils"></i> fa-ils</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ioxhost"></i> fa-ioxhost</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-lastfm"></i> fa-lastfm</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-lastfm-square"></i> fa-lastfm-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-line-chart"></i> fa-line-chart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-meanpath"></i> fa-meanpath</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-newspaper-o"></i> fa-newspaper-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-paint-brush"></i> fa-paint-brush</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-paypal"></i> fa-paypal</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pie-chart"></i> fa-pie-chart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-plug"></i> fa-plug</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-shekel"></i> fa-shekel <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sheqel"></i> fa-sheqel <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-slideshare"></i> fa-slideshare</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-soccer-ball-o"></i> fa-soccer-ball-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-off"></i> fa-toggle-off</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-on"></i> fa-toggle-on</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-trash"></i> fa-trash</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tty"></i> fa-tty</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-twitch"></i> fa-twitch</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-wifi"></i> fa-wifi</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-yelp"></i> fa-yelp</div>
                                            </div>
                                        </section>

                                        <section id="web-application">
                                            <h2 class="page-header">Web Application Icons</h2>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-adjust"></i> fa-adjust</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-anchor"></i> fa-anchor</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-archive"></i> fa-archive</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-area-chart"></i> fa-area-chart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> fa-arrows</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-asterisk"></i> fa-asterisk</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-at"></i> fa-at</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-automobile"></i> fa-automobile <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ban"></i> fa-ban</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bank"></i> fa-bank <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart"></i> fa-bar-chart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-barcode"></i> fa-barcode</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bars"></i> fa-bars</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-beer"></i> fa-beer</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bell"></i> fa-bell</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bell-o"></i> fa-bell-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bell-slash"></i> fa-bell-slash</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bell-slash-o"></i> fa-bell-slash-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bicycle"></i> fa-bicycle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-binoculars"></i> fa-binoculars</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-birthday-cake"></i> fa-birthday-cake</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bolt"></i> fa-bolt</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bomb"></i> fa-bomb</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-book"></i> fa-book</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bookmark"></i> fa-bookmark</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-briefcase"></i> fa-briefcase</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bug"></i> fa-bug</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-building"></i> fa-building</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-building-o"></i> fa-building-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bullhorn"></i> fa-bullhorn</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bullseye"></i> fa-bullseye</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bus"></i> fa-bus</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cab"></i> fa-cab <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-calculator"></i> fa-calculator</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-calendar"></i> fa-calendar</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-o"></i> fa-calendar-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-camera"></i> fa-camera</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-camera-retro"></i> fa-camera-retro</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-car"></i> fa-car</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc"></i> fa-cc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-certificate"></i> fa-certificate</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-check"></i> fa-check</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-check-circle"></i> fa-check-circle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> fa-check-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-child"></i> fa-child</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> fa-circle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> fa-circle-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-circle-thin"></i> fa-circle-thin</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-clock-o"></i> fa-clock-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-close"></i> fa-close <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cloud"></i> fa-cloud</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cloud-download"></i> fa-cloud-download</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-code"></i> fa-code</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-code-fork"></i> fa-code-fork</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-coffee"></i> fa-coffee</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cog"></i> fa-cog</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cogs"></i> fa-cogs</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-comment"></i> fa-comment</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-comment-o"></i> fa-comment-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-comments"></i> fa-comments</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-comments-o"></i> fa-comments-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-compass"></i> fa-compass</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-copyright"></i> fa-copyright</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> fa-credit-card</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-crop"></i> fa-crop</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-crosshairs"></i> fa-crosshairs</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cube"></i> fa-cube</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cubes"></i> fa-cubes</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cutlery"></i> fa-cutlery</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-database"></i> fa-database</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-desktop"></i> fa-desktop</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-download"></i> fa-download</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-envelope"></i> fa-envelope</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-envelope-o"></i> fa-envelope-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-envelope-square"></i> fa-envelope-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> fa-eraser</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-exchange"></i> fa-exchange</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation"></i> fa-exclamation</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-external-link"></i> fa-external-link</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-external-link-square"></i> fa-external-link-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-eye"></i> fa-eye</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-eye-slash"></i> fa-eye-slash</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-eyedropper"></i> fa-eyedropper</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-fax"></i> fa-fax</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-female"></i> fa-female</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> fa-file-code-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> fa-file-image-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> fa-file-video-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> fa-file-word-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-film"></i> fa-film</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-filter"></i> fa-filter</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-fire"></i> fa-fire</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-flag"></i> fa-flag</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-flag-o"></i> fa-flag-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-flask"></i> fa-flask</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-folder"></i> fa-folder</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-folder-o"></i> fa-folder-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-folder-open"></i> fa-folder-open</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-frown-o"></i> fa-frown-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-futbol-o"></i> fa-futbol-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-gamepad"></i> fa-gamepad</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-gavel"></i> fa-gavel</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-gift"></i> fa-gift</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-glass"></i> fa-glass</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-globe"></i> fa-globe</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-graduation-cap"></i> fa-graduation-cap</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-hdd-o"></i> fa-hdd-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-headphones"></i> fa-headphones</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-heart"></i> fa-heart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-heart-o"></i> fa-heart-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-history"></i> fa-history</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-home"></i> fa-home</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-image"></i> fa-image <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-inbox"></i> fa-inbox</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-info"></i> fa-info</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-info-circle"></i> fa-info-circle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-institution"></i> fa-institution <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-key"></i> fa-key</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-language"></i> fa-language</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-laptop"></i> fa-laptop</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-leaf"></i> fa-leaf</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-lemon-o"></i> fa-lemon-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-level-down"></i> fa-level-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-level-up"></i> fa-level-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-life-bouy"></i> fa-life-bouy <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-life-buoy"></i> fa-life-buoy <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-life-ring"></i> fa-life-ring</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-life-saver"></i> fa-life-saver <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-line-chart"></i> fa-line-chart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-location-arrow"></i> fa-location-arrow</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-lock"></i> fa-lock</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-magic"></i> fa-magic</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-magnet"></i> fa-magnet</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-male"></i> fa-male</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-map-marker"></i> fa-map-marker</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-meh-o"></i> fa-meh-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-microphone"></i> fa-microphone</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-minus"></i> fa-minus</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-minus-circle"></i> fa-minus-circle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> fa-minus-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-mobile"></i> fa-mobile</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> fa-money</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-moon-o"></i> fa-moon-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-mortar-board"></i> fa-mortar-board <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-music"></i> fa-music</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-navicon"></i> fa-navicon <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-newspaper-o"></i> fa-newspaper-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-paint-brush"></i> fa-paint-brush</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-paper-plane"></i> fa-paper-plane</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-paper-plane-o"></i> fa-paper-plane-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-paw"></i> fa-paw</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pencil"></i> fa-pencil</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square"></i> fa-pencil-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-phone"></i> fa-phone</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-phone-square"></i> fa-phone-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-photo"></i> fa-photo <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-picture-o"></i> fa-picture-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pie-chart"></i> fa-pie-chart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-plane"></i> fa-plane</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-plug"></i> fa-plug</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-plus"></i> fa-plus</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-plus-circle"></i> fa-plus-circle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-power-off"></i> fa-power-off</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-print"></i> fa-print</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-qrcode"></i> fa-qrcode</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-question"></i> fa-question</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-question-circle"></i> fa-question-circle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-quote-left"></i> fa-quote-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-quote-right"></i> fa-quote-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-random"></i> fa-random</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-recycle"></i> fa-recycle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-refresh"></i> fa-refresh</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-remove"></i> fa-remove <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-reorder"></i> fa-reorder <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-reply"></i> fa-reply</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-reply-all"></i> fa-reply-all</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-retweet"></i> fa-retweet</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-road"></i> fa-road</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-rocket"></i> fa-rocket</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-rss"></i> fa-rss</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-rss-square"></i> fa-rss-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-search"></i> fa-search</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-search-minus"></i> fa-search-minus</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-search-plus"></i> fa-search-plus</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-send"></i> fa-send <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-send-o"></i> fa-send-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-share"></i> fa-share</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> fa-share-alt</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-share-square"></i> fa-share-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-share-square-o"></i> fa-share-square-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-shield"></i> fa-shield</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sign-in"></i> fa-sign-in</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sign-out"></i> fa-sign-out</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-signal"></i> fa-signal</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sitemap"></i> fa-sitemap</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sliders"></i> fa-sliders</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-smile-o"></i> fa-smile-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-soccer-ball-o"></i> fa-soccer-ball-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sort"></i> fa-sort</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sort-asc"></i> fa-sort-asc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sort-desc"></i> fa-sort-desc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-space-shuttle"></i> fa-space-shuttle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-spinner"></i> fa-spinner</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-spoon"></i> fa-spoon</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> fa-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> fa-square-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-star"></i> fa-star</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-star-half"></i> fa-star-half</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-o"></i> fa-star-half-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-star-o"></i> fa-star-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-suitcase"></i> fa-suitcase</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sun-o"></i> fa-sun-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-support"></i> fa-support <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tablet"></i> fa-tablet</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tachometer"></i> fa-tachometer</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tag"></i> fa-tag</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tags"></i> fa-tags</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tasks"></i> fa-tasks</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-taxi"></i> fa-taxi</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-terminal"></i> fa-terminal</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ticket"></i> fa-ticket</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-times"></i> fa-times</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-times-circle"></i> fa-times-circle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tint"></i> fa-tint</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-off"></i> fa-toggle-off</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-on"></i> fa-toggle-on</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-trash"></i> fa-trash</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-trash-o"></i> fa-trash-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tree"></i> fa-tree</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-trophy"></i> fa-trophy</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-truck"></i> fa-truck</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tty"></i> fa-tty</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-umbrella"></i> fa-umbrella</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-university"></i> fa-university</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-unlock"></i> fa-unlock</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-upload"></i> fa-upload</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-user"></i> fa-user</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-users"></i> fa-users</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-video-camera"></i> fa-video-camera</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-volume-down"></i> fa-volume-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-volume-off"></i> fa-volume-off</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-volume-up"></i> fa-volume-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-wifi"></i> fa-wifi</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-wrench"></i> fa-wrench</div>
                                            </div>
                                        </section>

                                        <section id="file-type">
                                            <h2 class="page-header">File Type Icons</h2>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file"></i> fa-file</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> fa-file-code-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> fa-file-image-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-o"></i> fa-file-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-text"></i> fa-file-text</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> fa-file-video-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> fa-file-word-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span></div>
                                            </div>
                                        </section>

                                        <section id="spinner">
                                            <h2 class="page-header">Spinner Icons</h2>

                                            <div class="alert alert-success">
                                                <ul class="fa-ul">
                                                    <li>
                                                        <i class="fa fa-info-circle fa-lg fa-li"></i>
                                                        These icons work great with the <code>fa-spin</code> class. Check out the
                                                        <a href="http://fortawesome.github.io/Font-Awesome/examples/#spinning" class="alert-link">spinning icons example</a>.
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cog"></i> fa-cog</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-refresh"></i> fa-refresh</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-spinner"></i> fa-spinner</div>
                                            </div>
                                        </section>

                                        <section id="form-control">
                                            <h2 class="page-header">Form Control Icons</h2>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> fa-check-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> fa-circle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> fa-circle-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> fa-minus-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> fa-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> fa-square-o</div>
                                            </div>
                                        </section>

                                        <section id="payment">
                                            <h2 class="page-header">Payment Icons</h2>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-amex"></i> fa-cc-amex</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-discover"></i> fa-cc-discover</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-mastercard"></i> fa-cc-mastercard</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-paypal"></i> fa-cc-paypal</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-stripe"></i> fa-cc-stripe</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-visa"></i> fa-cc-visa</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> fa-credit-card</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-google-wallet"></i> fa-google-wallet</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-paypal"></i> fa-paypal</div>
                                            </div>
                                        </section>

                                        <section id="chart">
                                            <h2 class="page-header">Chart Icons</h2>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-area-chart"></i> fa-area-chart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart"></i> fa-bar-chart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-line-chart"></i> fa-line-chart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pie-chart"></i> fa-pie-chart</div>
                                            </div>
                                        </section>

                                        <section id="currency">
                                            <h2 class="page-header">Currency Icons</h2>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> fa-btc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-eur"></i> fa-eur</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-gbp"></i> fa-gbp</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ils"></i> fa-ils</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-inr"></i> fa-inr</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-jpy"></i> fa-jpy</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-krw"></i> fa-krw</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> fa-money</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-rub"></i> fa-rub</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-shekel"></i> fa-shekel <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-sheqel"></i> fa-sheqel <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-try"></i> fa-try</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-usd"></i> fa-usd</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span></div>
                                            </div>
                                        </section>

                                        <section id="text-editor">
                                            <h2 class="page-header">Text Editor Icons</h2>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-align-center"></i> fa-align-center</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-align-justify"></i> fa-align-justify</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-align-left"></i> fa-align-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-align-right"></i> fa-align-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bold"></i> fa-bold</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-chain-broken"></i> fa-chain-broken</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-clipboard"></i> fa-clipboard</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-columns"></i> fa-columns</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> fa-eraser</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file"></i> fa-file</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-o"></i> fa-file-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-text"></i> fa-file-text</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-files-o"></i> fa-files-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-floppy-o"></i> fa-floppy-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-font"></i> fa-font</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-header"></i> fa-header</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-indent"></i> fa-indent</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-italic"></i> fa-italic</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-link"></i> fa-link</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-list"></i> fa-list</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-list-alt"></i> fa-list-alt</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-list-ol"></i> fa-list-ol</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-list-ul"></i> fa-list-ul</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-outdent"></i> fa-outdent</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-paperclip"></i> fa-paperclip</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-paragraph"></i> fa-paragraph</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-repeat"></i> fa-repeat</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-scissors"></i> fa-scissors</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-strikethrough"></i> fa-strikethrough</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-subscript"></i> fa-subscript</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-superscript"></i> fa-superscript</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-table"></i> fa-table</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-text-height"></i> fa-text-height</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-text-width"></i> fa-text-width</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-th"></i> fa-th</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-th-large"></i> fa-th-large</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-th-list"></i> fa-th-list</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-underline"></i> fa-underline</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-undo"></i> fa-undo</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span></div>
                                            </div>
                                        </section>

                                        <section id="directional">
                                            <h2 class="page-header">Directional Icons</h2>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-angle-down"></i> fa-angle-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-angle-left"></i> fa-angle-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-angle-right"></i> fa-angle-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-angle-up"></i> fa-angle-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-down"></i> fa-arrow-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-left"></i> fa-arrow-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-right"></i> fa-arrow-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-up"></i> fa-arrow-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> fa-arrows</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-down"></i> fa-caret-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-left"></i> fa-caret-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-right"></i> fa-caret-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-caret-up"></i> fa-caret-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-down"></i> fa-chevron-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-left"></i> fa-chevron-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-right"></i> fa-chevron-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-up"></i> fa-chevron-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
                                            </div>
                                        </section>

                                        <section id="video-player">
                                            <h2 class="page-header">Video Player Icons</h2>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-backward"></i> fa-backward</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-compress"></i> fa-compress</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-eject"></i> fa-eject</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-expand"></i> fa-expand</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-fast-backward"></i> fa-fast-backward</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-fast-forward"></i> fa-fast-forward</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-forward"></i> fa-forward</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pause"></i> fa-pause</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-play"></i> fa-play</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-play-circle"></i> fa-play-circle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-step-backward"></i> fa-step-backward</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-step-forward"></i> fa-step-forward</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-stop"></i> fa-stop</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
                                            </div>
                                        </section>

                                        <section id="brand">
                                            <h2 class="page-header">Brand Icons</h2>
                                            <div class="alert alert-success">
                                                <ul class="margin-bottom-none padding-left-lg">
                                                    <li>All brand icons are trademarks of their respective owners.</li>
                                                    <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
                                                </ul>
                                            </div>

                                            <div class="alert alert-warning">
                                                <h4><i class="fa fa-warning"></i> Warning!</h4>
                                                Apparently, Adblock Plus can remove Font Awesome brand icons with their "Remove Social
                                                Media Buttons" setting. We will not use hacks to force them to display. Please
                                                <a href="https://adblockplus.org/en/bugs" class="alert-link">report an issue with Adblock Plus</a> if you believe this to be
                                                an error. To work around this, you'll need to modify the social icon class names.
                                            </div>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-adn"></i> fa-adn</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-android"></i> fa-android</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-angellist"></i> fa-angellist</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-apple"></i> fa-apple</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-behance"></i> fa-behance</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-behance-square"></i> fa-behance-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket"></i> fa-bitbucket</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> fa-btc</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-amex"></i> fa-cc-amex</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-discover"></i> fa-cc-discover</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-mastercard"></i> fa-cc-mastercard</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-paypal"></i> fa-cc-paypal</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-stripe"></i> fa-cc-stripe</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-cc-visa"></i> fa-cc-visa</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-codepen"></i> fa-codepen</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-css3"></i> fa-css3</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-delicious"></i> fa-delicious</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-deviantart"></i> fa-deviantart</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-digg"></i> fa-digg</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-dribbble"></i> fa-dribbble</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-dropbox"></i> fa-dropbox</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-drupal"></i> fa-drupal</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-empire"></i> fa-empire</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-facebook"></i> fa-facebook</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-facebook-square"></i> fa-facebook-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-flickr"></i> fa-flickr</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-foursquare"></i> fa-foursquare</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ge"></i> fa-ge <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-git"></i> fa-git</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-git-square"></i> fa-git-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-github"></i> fa-github</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-github-alt"></i> fa-github-alt</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-github-square"></i> fa-github-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-gittip"></i> fa-gittip</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-google"></i> fa-google</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-google-plus"></i> fa-google-plus</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-google-wallet"></i> fa-google-wallet</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-hacker-news"></i> fa-hacker-news</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-html5"></i> fa-html5</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-instagram"></i> fa-instagram</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ioxhost"></i> fa-ioxhost</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-joomla"></i> fa-joomla</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-jsfiddle"></i> fa-jsfiddle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-lastfm"></i> fa-lastfm</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-lastfm-square"></i> fa-lastfm-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-linkedin"></i> fa-linkedin</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-linux"></i> fa-linux</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-maxcdn"></i> fa-maxcdn</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-meanpath"></i> fa-meanpath</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-openid"></i> fa-openid</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pagelines"></i> fa-pagelines</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-paypal"></i> fa-paypal</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pied-piper"></i> fa-pied-piper</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pied-piper-alt"></i> fa-pied-piper-alt</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pinterest"></i> fa-pinterest</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-qq"></i> fa-qq</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ra"></i> fa-ra <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-rebel"></i> fa-rebel</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-reddit"></i> fa-reddit</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-reddit-square"></i> fa-reddit-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-renren"></i> fa-renren</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> fa-share-alt</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-skype"></i> fa-skype</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-slack"></i> fa-slack</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-slideshare"></i> fa-slideshare</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-soundcloud"></i> fa-soundcloud</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-spotify"></i> fa-spotify</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-steam"></i> fa-steam</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-steam-square"></i> fa-steam-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-stumbleupon"></i> fa-stumbleupon</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-stumbleupon-circle"></i> fa-stumbleupon-circle</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tencent-weibo"></i> fa-tencent-weibo</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-trello"></i> fa-trello</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tumblr"></i> fa-tumblr</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-twitch"></i> fa-twitch</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-twitter"></i> fa-twitter</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-twitter-square"></i> fa-twitter-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-vine"></i> fa-vine</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-vk"></i> fa-vk</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-wechat"></i> fa-wechat <span class="text-muted">(alias)</span></div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-weibo"></i> fa-weibo</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-weixin"></i> fa-weixin</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-windows"></i> fa-windows</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-wordpress"></i> fa-wordpress</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-xing"></i> fa-xing</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-xing-square"></i> fa-xing-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-yahoo"></i> fa-yahoo</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-yelp"></i> fa-yelp</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-youtube"></i> fa-youtube</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-square"></i> fa-youtube-square</div>
                                            </div>
                                        </section>

                                        <section id="medical">
                                            <h2 class="page-header">Medical Icons</h2>

                                            <div class="row fontawesome-icon-list">
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-ambulance"></i> fa-ambulance</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-h-square"></i> fa-h-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-hospital-o"></i> fa-hospital-o</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-medkit"></i> fa-medkit</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-stethoscope"></i> fa-stethoscope</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-user-md"></i> fa-user-md</div>
                                                <div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                                            </div>
                                        </section>
                                    </div><!-- /#fa-icons -->
                                    <!-- glyphicons-->
                                    <div class="tab-pane" id="glyphicons">

                                        <ul class="bs-glyphicons">
                                            <li>
                                                <span class="glyphicon glyphicon-adjust"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-adjust</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-align-center"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-align-center</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-align-justify"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-align-justify</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-align-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-align-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-align-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-align-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-arrow-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-arrow-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-arrow-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-arrow-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-arrow-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-arrow-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-asterisk"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-backward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-backward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-ban-circle"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-ban-circle</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-barcode"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-barcode</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-bell"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-bell</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-bold"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-bold</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-book"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-book</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-bookmark"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-bookmark</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-briefcase"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-briefcase</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-bullhorn"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-bullhorn</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-calendar"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-calendar</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-camera"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-camera</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-certificate"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-certificate</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-check"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-check</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-chevron-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-chevron-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-chevron-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-chevron-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-chevron-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-circle-arrow-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-circle-arrow-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-circle-arrow-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-cloud"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-cloud</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-cloud-download"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-cloud-download</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-cloud-upload"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-cog"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-cog</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-collapse-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-collapse-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-collapse-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-collapse-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-comment"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-comment</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-compressed"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-compressed</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-copyright-mark"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-credit-card"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-credit-card</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-cutlery"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-cutlery</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-dashboard"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-dashboard</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-download"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-download</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-download-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-download-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-earphone"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-earphone</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-edit"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-edit</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-eject"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-eject</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-envelope"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-envelope</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-euro"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-euro</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-exclamation-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-expand"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-expand</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-export"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-export</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-eye-close"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-eye-close</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-eye-open</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-facetime-video"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-facetime-video</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-fast-backward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-fast-backward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-fast-forward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-fast-forward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-file"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-file</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-film"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-film</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-filter"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-filter</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-fire"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-fire</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-flag"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-flag</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-flash"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-flash</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-floppy-open"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-floppy-open</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-floppy-remove"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-floppy-save"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-floppy-save</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-floppy-saved"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-folder-close"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-folder-close</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-folder-open</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-font"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-font</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-forward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-forward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-fullscreen"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-fullscreen</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-gbp"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-gbp</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-gift"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-gift</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-glass"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-glass</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-globe"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-globe</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hand-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hand-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hand-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hand-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hand-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hand-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hand-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hand-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hd-video"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hd-video</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-hdd"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-hdd</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-header"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-header</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-headphones"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-headphones</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-heart"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-heart</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-heart-empty"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-heart-empty</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-home"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-home</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-import"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-import</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-inbox"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-inbox</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-indent-left"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-indent-left</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-indent-right"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-indent-right</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-info-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-info-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-italic"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-italic</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-leaf"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-leaf</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-link"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-link</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-list"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-list</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-list-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-list-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-lock"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-lock</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-log-in"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-log-in</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-log-out"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-log-out</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-magnet"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-magnet</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-map-marker"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-map-marker</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-minus"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-minus</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-minus-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-minus-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-move"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-move</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-music"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-music</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-new-window"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-new-window</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-off"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-off</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-ok"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-ok</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-ok-circle"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-ok-circle</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-ok-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-ok-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-open"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-open</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-paperclip"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-paperclip</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-pause"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-pause</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-pencil"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-pencil</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-phone"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-phone</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-phone-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-phone-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-picture"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-picture</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-plane"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-plane</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-play"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-play</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-play-circle"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-play-circle</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-plus"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-plus</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-plus-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-plus-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-print"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-print</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-pushpin"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-pushpin</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-qrcode"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-qrcode</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-question-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-question-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-random"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-random</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-record"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-record</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-refresh"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-refresh</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-registration-mark"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-registration-mark</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-remove"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-remove</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-remove-circle"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-remove-circle</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-remove-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-remove-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-repeat"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-repeat</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-resize-full"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-resize-full</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-resize-horizontal"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-resize-small"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-resize-small</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-resize-vertical"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-retweet"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-retweet</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-road"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-road</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-save"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-save</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-saved"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-saved</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-screenshot"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-screenshot</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sd-video"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sd-video</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-search"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-search</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-send"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-send</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-share"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-share</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-share-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-share-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-signal"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-signal</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-alphabet"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-attributes"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-order"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sort-by-order-alt"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sound-5-1"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sound-6-1"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sound-7-1"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sound-dolby"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-sound-stereo"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-star</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-star-empty</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-stats"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-stats</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-step-backward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-step-backward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-step-forward"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-step-forward</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-stop"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-stop</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-subtitles"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-subtitles</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tag"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tag</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tags"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tags</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tasks"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tasks</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-text-height"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-text-height</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-text-width"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-text-width</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-th"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-th</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-th-large"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-th-large</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-th-list"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-th-list</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-thumbs-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-time"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-time</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tint"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tint</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tower"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tower</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-transfer"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-transfer</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-trash"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-trash</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tree-conifer"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-tree-deciduous"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-unchecked"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-unchecked</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-upload"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-upload</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-usd"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-usd</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-user"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-user</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-volume-down"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-volume-down</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-volume-off"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-volume-off</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-volume-up"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-volume-up</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-warning-sign"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-warning-sign</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-wrench"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-wrench</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-zoom-in"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
                                            </li>
                                            <li>
                                                <span class="glyphicon glyphicon-zoom-out"></span>
                                                <span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
                                            </li>
                                        </ul>
                                    </div><!-- /#ion-icons -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.nav-tabs-custom -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <script src="../../js/jquery/2.1.3/jquery.min.js"></script>
        <script src="../../widgets/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../js/AdminLTE/demo.js" type="text/javascript"></script>
    </body>
</html>
