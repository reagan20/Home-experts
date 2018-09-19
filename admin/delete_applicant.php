<?php
header('Content-type: application/json; charset=UTF-8');

$response = array();

if ($_POST['delete']) {

    require_once('../dbconnect.php');
    $pid = ($_POST['delete']);
    $query = "DELETE FROM helpers_registration_details WHERE id='$pid' ";
    $result=mysqli_query($conn,$query);

    if ($result) {
        $response['status']  = 'success';
        $response['message'] = 'Applicant Deleted Successfully ...';
    } else {
        $response['status']  = 'error';
        $response['message'] = 'Unable to delete applicant ...';
    }
    echo json_encode($response);
}
?>