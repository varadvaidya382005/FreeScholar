<?php
require("06_Connection_for_Institute_Verification.php");

$user_id = $_GET['user_id'];
// echo $user_id;

// You need to properly concatenate values into your query and fix its syntax
echo $user_id;

$queryForAddress = "Delete FROM `address_info` WHERE user_id = '$user_id'";
$queryForUser_info = "Delete FROM `user_info` WHERE user_id = '$user_id'";
$queryForPastQualification = "Delete FROM `past_qualification` WHERE user_id = '$user_id'";
$queryForCurrentCourseDetails = "Delete FROM `current_course` WHERE user_id = '$user_id'";
$queryForSchemes = "Delete FROM `user_from` WHERE 'username' = '$user_id'";

$result_for_address = mysqli_query($con1, $queryForAddress);
    $result_for_user_info = mysqli_query($con1, $queryForUser_info);
    $result_for_past_qualification = mysqli_query($con1, $queryForPastQualification);
    $result_for_current_course = mysqli_query($con1, $queryForCurrentCourseDetails);
    $result_for_schemes = mysqli_query($con1, $queryForSchemes);

    if (
        !$result_for_address ||
        !$result_for_user_info ||
        !$result_for_past_qualification ||
        !$result_for_current_course||
        !$result_for_schemes
    ) {
        echo "Error executing queries: " . mysqli_error($con1);
        // $success = false;
    }
    else{
        echo "Successfully dleted";
    }

?>
