<?php
require("06_Connection_for_Institute_Verification.php");

if (isset($_GET['institute_name'])) {
    $institute = $_GET['institute_name'];
    echo "hello:$institute";
}

//Fetch the data Bakiye

// Use prepared statements to prevent SQL injection
$queryForUser_info = "SELECT * FROM `current_course` WHERE collge_name = ?";
$stmt_user_info = mysqli_prepare($con1, $queryForUser_info);
mysqli_stmt_bind_param($stmt_user_info, "s", $institute);
mysqli_stmt_execute($stmt_user_info);
$result_for_user_info = mysqli_stmt_get_result($stmt_user_info);

if (!$result_for_user_info) {
    echo "Error: " . mysqli_error($con1);
} else {
    
    if ($result_for_user_info->num_rows > 0) {
        echo "<table border=2 style='border-collapse: collapse; width: 100%;'>";
        echo "<tr><th style='background-color: #1b61e3c8; color: white; padding: 8px; text-align: left;'>SRNO</th><th style='background-color: #1b61e3c8; color: white; padding: 8px; text-align: left;'>Name</th><th style='background-color: #1b61e3c8; color: white; padding: 8px; text-align: left;'>View Form</th></tr>";
        
        $serialNumber = 1; // Initialize serial number
        while ($row_user = mysqli_fetch_assoc($result_for_user_info)) {
            $user_name = $row_user['user_name'];
            
            echo "<tr>";
            echo "<td style='padding: 8px; text-align: left;'>" . $serialNumber . "</td>";
            echo "<td style='padding: 8px; text-align: left;'>" . $row_user['user_name'] . "</td>";
            echo "<td style='padding: 8px; text-align: left;'><a href='07_Personal_student_details.php?user_name=$user_name'>View</a></td>";
            echo "</tr>";
            $serialNumber++;
        }
        echo "</table>";
    } else {
        echo "No records found";
    }
}
?>
