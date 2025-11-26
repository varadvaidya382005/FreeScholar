<?php
require("06_Connection_for_Institute_Verification.php");

// Check if the user_name is provided in the URL
if(isset($_GET['user_name'])) {
    $user_id = $_GET['user_name'];

    // Check if the status is already accepted
    $check_query = "SELECT * FROM `status` WHERE `user_name` = '$user_id' AND `institute_status` = 'Accepted'";
    $check_result = mysqli_query($con1, $check_query);

    if(mysqli_num_rows($check_result) > 0) {
        // If the status is already accepted, display an alert message
        
        // If the status is not accepted, proceed with insertion
        $insert_query = "UPDATE `status` SET `current_state_status`='Accepted' WHERE `user_name`='$user_id'";
        $insert_result = mysqli_query($con1, $insert_query);

        if($insert_result) {
            // If insertion is successful, display a success message
            echo "<table border =5><td><b style='color: red;'>$user_id</b>::Current State Verfication  Completed and data is passed to Home State Verfication</table></td>";
        } else {
            // If there's an error during insertion, display the error message
            echo "Error inserting data: " . mysqli_error($con1);
        }
    }
    else{
        echo "No Data Available";
    }
} else {
    // If user_name is not provided in the URL, display an error message
    echo "Error: user_name not provided.";
}
?>
