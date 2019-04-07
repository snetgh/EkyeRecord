<?php

require 'db/db.php';

if (isset($_POST['btn_submit'])) {

    $get_patient_folder_number = $_POST['folder_number'];
    $get_patient_type = $_POST['type'];
    $get_patient_first_name = $_POST['first_name'];
    $get_patient_surname = $_POST['surname'];
    $get_patient_dob = $_POST['dob'];
    $get_patient_age = $_POST['age'];
    $get_patient_address = $_POST['address'];
    $get_patient_gender = $_POST['gender'];
    $get_patient_occupation = $_POST['occupation'];
    $get_patient_marital_status = $_POST['marital_status'];
    $get_patient_number = $_POST['telephone'];
    $get_patient_relative = $_POST['relative'];
    $get_patient_relative_number = $_POST['relative_telephone'];
    $get_patient_nhis_number = $_POST['nhis_number'];
    $get_patient_nhis_id = $_POST['nhis_id'];
    $get_patient_religion = $_POST['religion'];

    $run_insert_query = mysqli_query($my_conn, "INSERT INTO `tbl_patient_records` (`patient_id`, `patient_folder_number`, `patient_type`, `patient_f_name`, `patient_s_name`, `patient_dob`, `patient_age`, `patient_address`, `patient_gender`, `patient_occupation`, `patient_marital_status`, `patient_telephone`, `patient_relative`, `relative_telephone`, `patient_nhis_number`, `patient_nhis_id`, `patient_religion`, `patient_current_date`) VALUES (NULL, '$get_patient_folder_number', '$get_patient_type', '$get_patient_first_name', '$get_patient_surname', '$get_patient_dob', '$get_patient_age', '$get_patient_address', '$get_patient_gender', '$get_patient_occupation', '$get_patient_marital_status', '$get_patient_number', '$get_patient_relative', '$get_patient_relative_number', '$get_patient_nhis_number', '$get_patient_nhis_id', '$get_patient_religion', CURRENT_TIMESTAMP)");

    if ($run_insert_query) {

        echo "<script>
					alert('Details Saved Successfully');
			</script>";

    } else {

        echo "<script>
					alert('Failed To Save');

			</script>";

    }

}

?>
<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Records | Add Patient</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

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

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />

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
                                <li>
                                    <a href="dashboard.php">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="nav-active">
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
                    <h2>Add Patient</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Add Patient</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

                <!-- start: page -->
                <div class="row">
                    <div class="col-md-12">
                        <form id="form" class="form-horizontal" method="post">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="fa fa-caret-down"></a>
                                        <a href="#" class="fa fa-times"></a>
                                    </div>

                                    <h2 class="panel-title">Add Patient</h2>
                                    <p class="panel-subtitle">
                                        Please Fill Patient Records And Click On Save.
                                    </p>
                                </header>

                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Folder Number<span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="folder_number" class="form-control"
                                                                placeholder="Folder Number" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Type <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="type">
                                                                <option value="NHIS">NHIS</option>
                                                                <option value="Cash">Cash</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <hr>



                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">First Name<span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="first_name" class="form-control"
                                                                placeholder="Patient First Name" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Surname <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="surname" class="form-control"
                                                                placeholder="Patient Surname" />
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <hr>


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Date Of Birth <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="date" name="dob" class="form-control"
                                                                placeholder="Patient Date Of Birth" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Age <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="age" class="form-control"
                                                                placeholder="Patient Age" />
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <hr>


                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="col-sm-1 control-label">Address <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-11">
                                                            <textarea placeholder="Patient Address" class="form-control"
                                                                name="address"></textarea>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                            <hr>


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Gender <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="gender">
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Diversity">Diversity</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Occupation <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="occupation" class="form-control"
                                                                placeholder="Patient Occupation" required />
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <hr>


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Marital Status <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="marital_status">
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widow">Widow</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Telephone <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="telephone" class="form-control"
                                                                placeholder="Patient Number" />
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <hr>


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Relative <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="relative" class="form-control"
                                                                placeholder="Relative Full Name" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Telephone <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="relative_telephone"
                                                                class="form-control" placeholder="Relative Number" />
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <hr>


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">NHIS Number <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nhis_number" class="form-control"
                                                                placeholder="Patient NHIS Number" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">NHIS ID <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nhis_id" class="form-control"
                                                                placeholder="Patient NHIS ID" />
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <hr>



                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Religion<span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="religion">
                                                                <option value="Christian">Christian</option>
                                                                <option value="Islamic">Islamic</option>
                                                                <option value="Traditionalist">Traditionalist</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Date <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="date" name="current_date" class="form-control"
                                                                placeholder="Record Date" />
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <footer class="panel-footer">
                                    <div class="row" style="text-align: center">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <button type="submit" class="btn btn-primary btn-lg" name="btn_submit">Save
                                                Details</button>

                                        </div>
                                    </div>
                                </footer>
                            </section>
                        </form>
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
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="assets/vendor/jquery-validation/jquery.validate.js"></script>

    <!-- Specific Page Vendor -->
    <script src="assets/vendor/pnotify/pnotify.custom.js"></script>


    <!-- Theme Base, Components and Settings -->
    <script src="assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="assets/javascripts/theme.init.js"></script>


    <!-- Examples -->
    <script src="assets/javascripts/forms/examples.validation.js"></script>
</body>

</html>