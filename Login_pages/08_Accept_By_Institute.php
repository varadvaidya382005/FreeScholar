<?php
require("06_Connection_for_Institute_Verification.php");

if(isset($_GET['user_name'])) {
    $user_id = $_GET['user_name'];

    $check_query = "SELECT * FROM status WHERE user_name = '$user_id' AND institute_status = 'Accepted'";
    $check_result = mysqli_query($con1, $check_query);

    if(mysqli_num_rows($check_result) > 0) {
        echo "<table border =5><td><b style='color: red;'>Alert: The form is already accepted for user: $user_id</b></table></td>";
    } else {
        $insert_query = "INSERT INTO status (user_name, institute_status) VALUES ('$user_id', 'Accepted')";
        $insert_result = mysqli_query($con1, $insert_query);

        if($insert_result) {
            echo "<table border =5><td><b style='color: red;'>$user_id</b>:: Institute Verification Completed and data is passed to Current State Verification</table></td>";
        } else {
            echo "Error inserting data: " . mysqli_error($con1);
        }
    }
} else {
    echo "Error: Username not provided.";
}
?>
