<?php

require 'db/db.php';

?>


<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Records | Patient Records</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

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
    <link rel="stylesheet" href="assets/vendor/select2/select2.css" />
    <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

    <style>
    .view_patient:hover {
        cursor: pointer !important;
        font-size: 20px
    }
    </style>

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

                                <li>
                                    <a href="manage_patients.php">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        <span>Manage Patient</span>
                                    </a>
                                </li>

                                <li class="nav-active">
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
                    <h2>Patient Records</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Patient Records</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

                <!-- start: page -->
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">List Patient Records</h2>
                    </header>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped mb-none" id="datatable-tabletools">
                            <thead>
                                <tr>
                                    <th>Full name</th>
                                    <th>Folder Number</th>
                                    <th>Type</th>
                                    <th>Age</th>

                                    <th>Contact</th>
                                    <th>NHIS Number</th>
                                    <th>NHIS ID</th>
                                    <th>View Record</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
$get_patients_data = mysqli_query($my_conn, "SELECT * FROM tbl_patient_records");

while ($patients_data = mysqli_fetch_array($get_patients_data)) {?>

                                <tr class="gradeX">
                                    <td><?php echo $patients_data['patient_f_name'] . " " . $patients_data['patient_s_name']; ?>
                                    </td>
                                    <td><?php echo $patients_data['patient_folder_number']; ?></td>
                                    <td><?php echo $patients_data['patient_type']; ?></td>
                                    <td><?php echo $patients_data['patient_age']; ?></td>

                                    <td><?php echo $patients_data['patient_telephone']; ?></td>
                                    <td><?php echo $patients_data['patient_nhis_number']; ?></td>
                                    <td><?php echo $patients_data['patient_nhis_id']; ?></td>
                                    <td class="actions-hover actions-fade">

                                        <a class="view_patient" id="<?php echo $patients_data['patient_id'] ?>"><i
                                                class="fa fa-eye"></i></a>

                                    </td>
                                </tr>

                                <?php	}

?>
                            </tbody>
                        </table>
                    </div>
                </section>


                <!-- end: page -->
            </section>
        </div>


    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Folder Number<span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="folder_number" class="form-control"
                                                placeholder="Folder Number" disabled="disabled" id="folder_number"
                                                required />
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Type <span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="patient_type"
                                                disabled="disabled">
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
                                                placeholder="Patient First Name" required disabled="disabled"
                                                id="patient_f_name">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Surname <span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="surname" class="form-control"
                                                placeholder="Patient Surname" required disabled="disabled"
                                                id="patient_s_name" />
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
                                                placeholder="Patient Date Of Birth" required disabled="disabled"
                                                id="patient_dob" />
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Age <span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="age" class="form-control" placeholder="Patient Age"
                                                required disabled="disabled" id="patient_age" />
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
                                            <textarea placeholder="Patient Address" class="form-control" name="address"
                                                disabled="disabled" id="patient_address"> </textarea>
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
                                            <input type="text" class="form-control" id="patient_gender"
                                                disabled="disabled">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Occupation <span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="occupation" class="form-control"
                                                placeholder="Patient Occupation" required id="patient_occupation"
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
                                            <input type="text" class="form-control" id="patient_marital_status"
                                                disabled="disabled">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Telephone <span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="telephone" class="form-control"
                                                placeholder="Patient Number" required id="patient_telephone"
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
                                                placeholder="Patient Full Name" required id="patient_relative"
                                                disabled="disabled" />
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Telephone <span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="relative_telephone" class="form-control"
                                                placeholder="Relative Number" required id="relative_telephone"
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
                                                placeholder="Patient NHIS Number" required id="patient_nhis_number"
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
                                                placeholder="Patient NHIS ID" required id="patient_nhis_id"
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
                                            <input type="text" class="form-control" id="patient_religion"
                                                disabled="disabled">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Date Recorded <span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="current_date" class="form-control"
                                                placeholder="Record Date" id="patient_date_recorded"
                                                disabled="disabled" />
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <!-- Vendor -->
    <script src="assets/vendor/jquery/jquery.js"></script>
    <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="assets/vendor/select2/select2.js"></script>
    <script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
    <script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="assets/javascripts/theme.init.js"></script>


    <!-- Examples -->
    <script src="assets/javascripts/tables/examples.datatables.default.js"></script>
    <script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
    <script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>


    <script>
    $(".view_patient").on('click', function() {
        var patient_id = $(this).attr('id');
        $.ajax({
            type: "POST", //rest Type
            dataType: 'JSON', //mispelled
            url: "action.php",
            data: {
                user_id: patient_id,
                user_response: ''
            },
            success: function(response) {

                $('#folder_number').val(response.folder_number);
                $('#patient_type').val(response.patient_type);
                $('#patient_f_name').val(response.patient_f_name);
                $('#patient_s_name').val(response.patient_s_name);
                $('#patient_dob').val(response.patient_dob);
                $('#patient_age').val(response.patient_age);
                $('#patient_address').val(response.patient_address);
                $('#patient_gender').val(response.patient_gender);
                $('#patient_occupation').val(response.patient_occupation);
                $('#patient_marital_status').val(response.patient_marital_status);
                $('#patient_telephone').val(response.patient_telephone);
                $('#patient_relative').val(response.patient_relative);
                $('#relative_telephone').val(response.relative_telephone);
                $('#patient_nhis_number').val(response.patient_nhis_number);
                $('#patient_nhis_id').val(response.patient_nhis_id);
                $('#patient_religion').val(response.patient_religion);
                $('#patient_date_recorded').val(response.patient_current_date);


                $('#exampleModal').modal('show');
            }
        });
    })
    </script>

</body>

</html>