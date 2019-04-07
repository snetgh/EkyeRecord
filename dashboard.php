<?php

require_once 'db/db.php';

?>

<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Records | Dashboard</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="DonkorKrom Records Keeping">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="assets/vendor/morris/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="dashboard.php" class="logo">
                    <img src="img/log.png" height="35" alt="logo" />
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <form action="pages-search-results.html" class="search nav-form">
                    <div class="input-group input-search">
                        <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>

                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle"
                                data-lock-picture="assets/images/!logged-user.jpg" />
                        </figure>

                    </a>
                    <span><?php echo $_COOKIE['u']; ?></span>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>

                            <li>
                                <a role="menuitem" tabindex="-1" href="change_password.php" data-lock-screen="true"><i
                                        class="fa fa-lock"></i> Change Password</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="index.php"><i class="fa fa-power-off"></i>
                                    Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                        data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="dashboard.php">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="add_patient.php">
                                        <i class="fa fa-cubes" aria-hidden="true"></i>
                                        <span>Add Patient</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="manage_patients.php">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        <span>Manage Patient</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="patient_records.php">
                                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                                        <span>Patient Records</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="change_password.php">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                        <span>Change Password</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="index.php">
                                        <i class="fa fa-power-off" aria-hidden="true"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>


                            </ul>
                        </nav>

                        <hr class="separator" />
                    </div>

                </div>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Dashboard</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Dashboard</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

                <!-- start: page -->
                <div class="row">
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="chart-data-selector" id="salesSelectorWrapper">
                                            <h2>
                                                Sales:
                                                <strong>
                                                    <select class="form-control" id="salesSelector">
                                                        <option value="JSOFT Admin" selected>OPD</option>
                                                        <option value="JSOFT Drupal"> Ward</option>
                                                        <option value="JSOFT Wordpress">Pharmacy</option>
                                                    </select>
                                                </strong>
                                            </h2>

                                            <div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
                                                <!-- Flot: Sales JSOFT Admin -->
                                                <div class="chart chart-sm" data-sales-rel="JSOFT Admin"
                                                    id="flotDashSales1" class="chart-active"></div>
                                                <script>
                                                var flotDashSales1Data = [{
                                                    data: [
                                                        ["Jan", 140],
                                                        ["Feb", 240],
                                                        ["Mar", 190],
                                                        ["Apr", 140],
                                                        ["May", 180],
                                                        ["Jun", 320],
                                                        ["Jul", 270],
                                                        ["Aug", 180]
                                                    ],
                                                    color: "#0088cc"
                                                }];

                                                // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
                                                </script>

                                                <!-- Flot: Sales JSOFT Drupal -->
                                                <div class="chart chart-sm" data-sales-rel="JSOFT Drupal"
                                                    id="flotDashSales2" class="chart-hidden"></div>
                                                <script>
                                                var flotDashSales2Data = [{
                                                    data: [
                                                        ["Jan", 240],
                                                        ["Feb", 240],
                                                        ["Mar", 290],
                                                        ["Apr", 540],
                                                        ["May", 480],
                                                        ["Jun", 220],
                                                        ["Jul", 170],
                                                        ["Aug", 190]
                                                    ],
                                                    color: "#2baab1"
                                                }];

                                                // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
                                                </script>

                                                <!-- Flot: Sales JSOFT Wordpress -->
                                                <div class="chart chart-sm" data-sales-rel="JSOFT Wordpress"
                                                    id="flotDashSales3" class="chart-hidden"></div>
                                                <script>
                                                var flotDashSales3Data = [{
                                                    data: [
                                                        ["Jan", 840],
                                                        ["Feb", 740],
                                                        ["Mar", 690],
                                                        ["Apr", 940],
                                                        ["May", 1180],
                                                        ["Jun", 820],
                                                        ["Jul", 570],
                                                        ["Aug", 780]
                                                    ],
                                                    color: "#734ba9"
                                                }];

                                                // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
                                                </script>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-lg-4 text-center">
                                        <h2 class="panel-title mt-md">Sales Goal</h2>
                                        <div class="liquid-meter-wrapper liquid-meter-sm mt-lg">
                                            <div class="liquid-meter">
                                                <meter min="0" max="100" value="35" id="meterSales"></meter>
                                            </div>
                                            <div class="liquid-meter-selector" id="meterSalesSel">
                                                <a href="#" data-val="35" class="active">Monthly Goal</a>
                                                <a href="#" data-val="28">Annual Goal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-primary">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fa fa-life-ring"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Registered Users</h4>
                                                    <div class="info">
                                                        <strong
                                                            class="amount"><?php $get_users_number = mysqli_query($my_conn, "SELECT * FROM `login_tbl`");
echo mysqli_num_rows($get_users_number);?></strong>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-secondary">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-secondary">
                                                    <i class="fa fa-usd"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Registered Patients</h4>
                                                    <div class="info">
                                                        <strong
                                                            class="amount"><?php $get_patients_number = mysqli_query($my_conn, "SELECT * FROM `tbl_patient_records`");
echo mysqli_num_rows($get_patients_number);?></strong>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end: page -->
            </section>
        </div>

        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close visible-xs">
                        Collapse <i class="fa fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Calender</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>
                        </div>

                    </div>
                </div>
            </div>
        </aside>
    </section>

    <!-- Vendor -->
    <script src="assets/vendor/jquery/jquery.js"></script>
    <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
    <script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
    <script src="assets/vendor/flot/jquery.flot.js"></script>
    <script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
    <script src="assets/vendor/flot/jquery.flot.pie.js"></script>
    <script src="assets/vendor/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendor/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="assets/vendor/raphael/raphael.js"></script>
    <script src="assets/vendor/morris/morris.js"></script>
    <script src="assets/vendor/gauge/gauge.js"></script>
    <script src="assets/vendor/snap-svg/snap.svg.js"></script>
    <script src="assets/vendor/liquid-meter/liquid.meter.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="assets/javascripts/theme.init.js"></script>


    <!-- Examples -->
    <script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
</body>

</html>