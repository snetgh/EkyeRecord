<?php

require 'db/db.php';

if (isset($_GET['e']) && isset($_GET['d']) && isset($_GET['p'])) {
    $patient_id = $_GET['p'];
    $edit_user = $_GET['e'];
    $delete_user = $_GET['d'];

    $get_patient_data = mysqli_query($my_conn, "SELECT * FROM tbl_patient_records WHERE patient_id = '$patient_id'");
    $get_each_data = mysqli_fetch_array($get_patient_data);

    $_patient_folder_number = $get_each_data['patient_folder_number'];
    $_patient_type = $get_each_data['patient_type'];
    $_patient_first_name = $get_each_data['patient_f_name'];
    $_patient_surname = $get_each_data['patient_s_name'];
    $_patient_dob = $get_each_data['patient_dob'];
    $_patient_age = $get_each_data['patient_age'];
    $_patient_address = $get_each_data['patient_address'];
    $_patient_gender = $get_each_data['patient_gender'];
    $_patient_occupation = $get_each_data['patient_occupation'];
    $_patient_marital_status = $get_each_data['patient_marital_status'];
    $_patient_number = $get_each_data['patient_telephone'];
    $_patient_relative = $get_each_data['patient_relative'];
    $_patient_relative_number = $get_each_data['relative_telephone'];
    $_patient_nhis_number = $get_each_data['patient_nhis_number'];
    $_patient_nhis_id = $get_each_data['patient_nhis_id'];
    $_patient_religion = $get_each_data['patient_religion'];
    $_patient_timestamp = $get_each_data['patient_current_date'];

} else {
    echo "<script>window.location.href='manage_patients.php'</script>";
}

if (isset($_POST['btn_update'])) {

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

    $run_update_query = mysqli_query($my_conn, "UPDATE `tbl_patient_records` SET `patient_folder_number` = '$get_patient_folder_number',
			`patient_type` = '$get_patient_type',
			`patient_f_name` = '$get_patient_first_name',
			`patient_s_name` = '$get_patient_surname',
			`patient_dob` = '$get_patient_dob',
			`patient_age` = '$get_patient_age',
			`patient_address` = '$get_patient_address',
			`patient_gender` = '$get_patient_gender',
			`patient_occupation` = '$get_patient_occupation',
			`patient_marital_status` = '$get_patient_marital_status',
			`patient_telephone` = '$get_patient_number',
			`patient_relative` = '$get_patient_relative',
			`relative_telephone` = '$get_patient_relative_number',
			`patient_nhis_number` = '$get_patient_nhis_number',
			`patient_nhis_id` = '$get_patient_nhis_id',
			`patient_religion` = '$get_patient_religion'
			WHERE
			`tbl_patient_records`.`patient_id` = $patient_id");

    if ($run_update_query) {

        echo "<script>
					alert('Details Saved Successfully');
			</script>";

        echo "<script>
					window.location.href='manage_patients.php';
			</script>";

    } else {

        echo "<script>
					alert('Failed To Save');
			</script>";

    }
}

if (isset($_POST['btn_delete'])) {

    $run_delete_query = mysqli_query($my_conn, "DELETE FROM `tbl_patient_records` WHERE patient_id = $patient_id");

    if ($run_delete_query) {

        echo "<script>
					alert('Deleted Successfully');
			</script>";

        echo "<script>
					window.location.href='manage_patients.php';
			</script>";

    } else {

        echo "<script>
					alert('Failed To Delete');
			</script>";

    }
}

?>
<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Records | Manage Patient</title>
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

                                <li>
                                    <a href="add_patient.php">
                                        <i class="fa fa-cubes" aria-hidden="true"></i>
                                        <span>Add Patient</span>
                                    </a>
                                </li>

                                <li class="nav-active">
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
                    <h2>Manage Patients</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Edit Patients</span></li>

                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

                <!-- start: page -->
                <div class="row">
                    <div class="col-md-12">

                        <?php

if ($edit_user == 1) {?>

                        <form id="form" class="form-horizontal" method="post">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="fa fa-caret-down"></a>
                                        <a href="#" class="fa fa-times"></a>
                                    </div>

                                    <h2 class="panel-title">Update Patient Details</h2>
                                    <p class="panel-subtitle">
                                        Please Fill Patient Records And Click On Save To <strong>Update</strong>.
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
                                                                placeholder="Folder Number"
                                                                value="<?php echo $_patient_folder_number; ?>"
                                                                 />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Type <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="type">
                                                                <?php
if ($_patient_type == "NHIS") {?>

                                                                <option value="NHIS" selected="selected">NHIS</option>
                                                                <option value="Cash">Cash</option>

                                                                <?php } elseif ($_patient_type == "Cash") {?>
                                                                <option value="NHIS">NHIS</option>
                                                                <option value="Cash" selected="selected">Cash</option>

                                                                <?php } else {?>

                                                                <option value="NHIS">NHIS</option>
                                                                <option value="Cash">Cash</option>

                                                                <?php	}

    ?>


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
                                                                placeholder="Patient First Name" /
                                                                value="<?php echo $_patient_first_name; ?>">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Surname <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="surname" class="form-control"
                                                                placeholder="Patient Surname" 
                                                                value="<?php echo $_patient_surname; ?>" />
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
                                                                placeholder="Patient Date Of Birth" 
                                                                value="<?php echo $_patient_dob; ?>" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Age <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="age" class="form-control"
                                                                placeholder="Patient Age" 
                                                                value="<?php echo $_patient_age; ?>" />
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
                                                                name="address"> <?php echo $_patient_address; ?></textarea>
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
                                                                <?php

    if ($_patient_gender == "Male") {?>
                                                                <option value="Male" selected="selected">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Diversity">Diversity</option>

                                                                <?php } elseif ($_patient_gender == "Female") {?>
                                                                <option value="Male">Male</option>
                                                                <option value="Female" selected="selected">Female
                                                                </option>
                                                                <option value="Diversity">Diversity</option>

                                                                <?php } elseif ($_patient_gender == "Diversity") {?>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Diversity" selected="selected">Diversity
                                                                </option>

                                                                <?php } else {?>

                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Diversity">Diversity
                                                                </option>

                                                                <?php	}

    ?>

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
                                                                placeholder="Patient Occupation" 
                                                                value="<?php echo $_patient_occupation; ?>" />
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

                                                                <?php

    if ($_patient_marital_status == "Single") {?>
                                                                <option value="Single" selected="selected">Single
                                                                </option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widow">Widow</option>

                                                                <?php } elseif ($_patient_marital_status == "Married") {?>
                                                                <option value="Single">Single</option>
                                                                <option value="Married" selected="selected">Married
                                                                </option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widow">Widow</option>

                                                                <?php } elseif ($_patient_marital_status == "Divorced") {?>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced" selected="selected">Divorced
                                                                </option>
                                                                <option value="Widow">Widow</option>

                                                                <?php	} elseif ($_patient_marital_status == "Widow") {?>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widow" selected="selected">Widow</option>

                                                                <?php } else {?>

                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widow">Widow</option>


                                                                <?php }

    ?>

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
                                                                placeholder="Patient Number" 
                                                                value="<?php echo $_patient_number; ?>" />
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
                                                                placeholder="Relative Full Name" 
                                                                value="<?php echo $_patient_relative; ?>" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Telephone <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="relative_telephone"
                                                                class="form-control" placeholder="Relative Number"
                                                                
                                                                value="<?php echo $_patient_relative_number; ?>" />
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
                                                                placeholder="Patient NHIS Number" 
                                                                value="<?php echo $_patient_nhis_number; ?>" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">NHIS ID <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nhis_id" class="form-control"
                                                                placeholder="Patient NHIS ID" 
                                                                value="<?php echo $_patient_nhis_id; ?>" />
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
                                                                <?php

    if ($_patient_religion == "Christian") {?>
                                                                <option value="Christian" selected="selected">Christian
                                                                </option>
                                                                <option value="Islamic">Islamic</option>
                                                                <option value="Traditionalist">Traditionalist</option>
                                                                <option value="Other">Other</option>

                                                                <?php } elseif ($_patient_religion == "Islamic") {?>

                                                                <option value="Christian">Christian</option>
                                                                <option value="Islamic" selected="selected">Islamic
                                                                </option>
                                                                <option value="Traditionalist">Traditionalist</option>
                                                                <option value="Other">Other</option>


                                                                <?php } elseif ($patient_religion == "Traditionalist") {?>

                                                                <option value="Christian">Christian</option>
                                                                <option value="Islamic">Islamic</option>
                                                                <option value="Traditionalist" selected="selected">
                                                                    Traditionalist</option>
                                                                <option value="Other">Other</option>


                                                                <?php } elseif ($_patient_religion == "Other") {?>

                                                                <option value="Christian">Christian</option>
                                                                <option value="Islamic">Islamic</option>
                                                                <option value="Traditionalist">Traditionalist</option>
                                                                <option value="Other" selected="selected">Other</option>

                                                                <?php } else {?>

                                                                <option value="Christian">Christian</option>
                                                                <option value="Islamic">Islamic</option>
                                                                <option value="Traditionalist">Traditionalist</option>
                                                                <option value="Other">Other</option>

                                                                <?php	}

    ?>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Date <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="current_date" class="form-control"
                                                                placeholder="Record Date"
                                                                value="<?php echo $_patient_timestamp; ?>"
                                                                disabled="disabled" />
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
                                            <button type="submit" class="btn btn-primary btn-lg"
                                                name="btn_update">Update Details</button>
                                            <a href="manage_patients.php" class="btn btn-danger btn-lg">Cancel
                                                Update</a>

                                        </div>
                                    </div>
                                </footer>
                            </section>
                        </form>

                        <?php	} else {?>

                        <form id="form" class="form-horizontal" method="post">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="fa fa-caret-down"></a>
                                        <a href="#" class="fa fa-times"></a>
                                    </div>

                                    <h2 class="panel-title">Delete Patient Details</h2>
                                    <p class="panel-subtitle">
                                        Please Click On Delete Patient If You Want To <strong>Delete Patients
                                            Record</strong>.
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
                                                                placeholder="Folder Number"
                                                                value="<?php echo $_patient_folder_number; ?>"
                                                                disabled="disabled" required />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Type <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="type"
                                                                disabled="disabled">
                                                                <?php
if ($_patient_type == "NHIS") {?>

                                                                <option value="NHIS" selected="selected">NHIS</option>
                                                                <option value="Cash">Cash</option>

                                                                <?php } elseif ($_patient_type == "Cash") {?>
                                                                <option value="NHIS">NHIS</option>
                                                                <option value="Cash" selected="selected">Cash</option>

                                                                <?php }

    ?>


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
                                                                placeholder="Patient First Name" required/
                                                                value="<?php echo $_patient_first_name; ?>"
                                                                disabled="disabled">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Surname <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="surname" class="form-control"
                                                                placeholder="Patient Surname" required
                                                                value="<?php echo $_patient_surname; ?>"
                                                                disabled="disabled" />
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
                                                                placeholder="Patient Date Of Birth" required
                                                                value="<?php echo $_patient_dob; ?>"
                                                                disabled="disabled" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Age <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="age" class="form-control"
                                                                placeholder="Patient Age" required
                                                                value="<?php echo $_patient_age; ?>"
                                                                disabled="disabled" />
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
                                                                name="address"
                                                                disabled="disabled"> <?php echo $_patient_address; ?></textarea>
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
                                                            <select class="form-control" name="gender"
                                                                disabled="disabled">
                                                                <?php

    if ($_patient_gender == "Male") {?>
                                                                <option value="Male" selected="selected">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Diversity">Diversity</option>

                                                                <?php } elseif ($_patient_gender == "Female") {?>
                                                                <option value="Male">Male</option>
                                                                <option value="Female" selected="selected">Female
                                                                </option>
                                                                <option value="Diversity">Diversity</option>

                                                                <?php } elseif ($_patient_gender == "Diversity") {?>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Diversity" selected="selected">Diversity
                                                                </option>

                                                                <?php }

    ?>

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
                                                                placeholder="Patient Occupation" required
                                                                value="<?php echo $_patient_occupation; ?>"
                                                                disabled="disabled" />
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
                                                            <select class="form-control" name="marital_status"
                                                                disabled="disabled">

                                                                <?php

    if ($_patient_marital_status == "Single") {?>
                                                                <option value="Single" selected="selected">Single
                                                                </option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widow">Widow</option>

                                                                <?php } elseif ($_patient_marital_status == "Married") {?>
                                                                <option value="Single">Single</option>
                                                                <option value="Married" selected="selected">Married
                                                                </option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widow">Widow</option>

                                                                <?php } elseif ($_patient_marital_status == "Divorced") {?>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced" selected="selected">Divorced
                                                                </option>
                                                                <option value="Widow">Widow</option>

                                                                <?php	} elseif ($_patient_marital_status == "Widow") {?>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widow" selected="selected">Widow</option>
                                                                <?php }

    ?>

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
                                                                placeholder="Patient Number" required
                                                                value="<?php echo $_patient_number; ?>"
                                                                disabled="disabled" />
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
                                                                placeholder="Patient Full Name" required
                                                                value="<?php echo $_patient_relative; ?>"
                                                                disabled="disabled" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Telephone <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="relative_telephone"
                                                                class="form-control" placeholder="Relative Number"
                                                                required
                                                                value="<?php echo $_patient_relative_number; ?>"
                                                                disabled="disabled" />
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
                                                                placeholder="Patient NHIS Number" required
                                                                value="<?php echo $_patient_nhis_number; ?>"
                                                                disabled="disabled" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">NHIS ID <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nhis_id" class="form-control"
                                                                placeholder="Patient NHIS ID" required
                                                                value="<?php echo $_patient_nhis_id; ?>"
                                                                disabled="disabled" />
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
                                                            <select class="form-control" name="religion"
                                                                disabled="disabled">
                                                                <?php

    if ($_patient_religion == "Christian") {?>
                                                                <option value="Christian" selected="selected">Christian
                                                                </option>
                                                                <option value="Islamic">Islamic</option>
                                                                <option value="Traditionalist">Traditionalist</option>
                                                                <option value="Other">Other</option>

                                                                <?php } elseif ($_patient_religion == "Islamic") {?>

                                                                <option value="Christian">Christian</option>
                                                                <option value="Islamic" selected="selected">Islamic
                                                                </option>
                                                                <option value="Traditionalist">Traditionalist</option>
                                                                <option value="Other">Other</option>


                                                                <?php } elseif ($patient_religion == "Traditionalist") {?>

                                                                <option value="Christian">Christian</option>
                                                                <option value="Islamic">Islamic</option>
                                                                <option value="Traditionalist" selected="selected">
                                                                    Traditionalist</option>
                                                                <option value="Other">Other</option>


                                                                <?php } elseif ($_patient_religion == "Other") {?>

                                                                <option value="Christian">Christian</option>
                                                                <option value="Islamic">Islamic</option>
                                                                <option value="Traditionalist">Traditionalist</option>
                                                                <option value="Other" selected="selected">Other</option>

                                                                <?php }

    ?>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Date <span
                                                                class="required">*</span></label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="current_date" class="form-control"
                                                                placeholder="Record Date"
                                                                value="<?php echo $_patient_timestamp; ?>"
                                                                disabled="disabled" />
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
                                            <button type="submit" class="btn btn-primary btn-lg"
                                                name="btn_delete">Delete Patient</button>
                                            <a href="manage_patients.php" class="btn btn-danger btn-lg">Cancel
                                                Delete</a>

                                        </div>
                                    </div>
                                </footer>
                            </section>
                        </form>


                        <?php }?>


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