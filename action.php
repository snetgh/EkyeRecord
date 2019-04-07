<?php

require_once 'db/db.php';

if (isset($_POST['user_response'])) {

    $get_user_id = $_POST['user_id'];

    $get_patient_data = mysqli_query($my_conn, "SELECT * FROM tbl_patient_records WHERE patient_id = '$get_user_id'");
    $get_each_data = mysqli_fetch_array($get_patient_data);

    $response['folder_number'] = $get_each_data['patient_folder_number'];
    $response['patient_type'] = $get_each_data['patient_type'];
    $response['patient_f_name'] = $get_each_data['patient_f_name'];
    $response['patient_s_name'] = $get_each_data['patient_s_name'];
    $response['patient_dob'] = $get_each_data['patient_dob'];
    $response['patient_age'] = $get_each_data['patient_age'];
    $response['patient_address'] = $get_each_data['patient_address'];
    $response['patient_gender'] = $get_each_data['patient_gender'];
    $response['patient_occupation'] = $get_each_data['patient_occupation'];
    $response['patient_marital_status'] = $get_each_data['patient_marital_status'];
    $response['patient_telephone'] = $get_each_data['patient_telephone'];
    $response['patient_relative'] = $get_each_data['patient_relative'];
    $response['relative_telephone'] = $get_each_data['relative_telephone'];
    $response['patient_nhis_number'] = $get_each_data['patient_nhis_number'];
    $response['patient_nhis_id'] = $get_each_data['patient_nhis_id'];
    $response['patient_religion'] = $get_each_data['patient_religion'];
    $response['patient_current_date'] = $get_each_data['patient_current_date'];

    echo json_encode($response);

}