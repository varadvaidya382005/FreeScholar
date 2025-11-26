<?php
// Include the database connection file
require("06_Connection_for_Institute_Verification.php");

// Check if the 'user_id' parameter is set in the URL query string
if (isset($_GET['user_id'])) {
    

    // Construct SQL queries with sanitized user input
    $queryForAddress = "SELECT * FROM `address_info` WHERE user_id = '$user_id'";
    $queryForUser_info = "SELECT * FROM `user_info` WHERE user_id = '$user_id'";
    $queryForPastQualification = "SELECT * FROM `past_qualification` WHERE user_id = '$user_id'";
    $queryForCurrentCourseDetails = "SELECT * FROM `current_course` WHERE user_id = '$user_id'";

    // Execute queries and handle errors
    $success = true;
    $result_for_address = mysqli_query($con1, $queryForAddress);
    $result_for_user_info = mysqli_query($con1, $queryForUser_info);
    $result_for_past_qualification = mysqli_query($con1, $queryForPastQualification);
    $result_for_current_course = mysqli_query($con1, $queryForCurrentCourseDetails);

    if (
        !$result_for_address ||
        !$result_for_user_info ||
        !$result_for_past_qualification ||
        !$result_for_current_course
    ) {
        echo "Error executing queries: " . mysqli_error($con1);
        $success = false;
    }

    if ($success) {
        // echo "All is well ";    
        
        
            echo "<table border=2>";
        
echo "<caption style='color: red; text-align: left;'>User Information</caption>";

    echo "<th>user_id</th>";
            echo "<th>aadhar_no</th>";
            echo "<th>applicant_name</th>";
            echo "<th>email</th>";
            echo "<th>mobile_no</th>";
            echo "<th>dob</th>";
            echo "<th>gender</th>";
            echo "<th>religious</th>";
            echo "<th>caste_detail</th>";
            echo "<th>income</th>";
            echo "<th>domocile</th>";
            echo "<th>bank_account</th>";
            echo "<th>ifsc</th>";
            

        while ($rowins = mysqli_fetch_assoc($result_for_user_info)) {
           
            echo "<tr>";
            // echo "<td>" . $serialNumber . "</td>";
            echo "<td>" . $rowins['user_id'] . "</td>";
            echo "<td>" . $rowins['aadhar_no'] . "</td>";
            echo "<td>" . $rowins['applicant_name'] . "</td>";
            echo "<td>" . $rowins['email'] . "</td>";
            echo "<td>" . $rowins['mobile_no'] . "</td>";
            echo "<td>" . $rowins['dob'] . "</td>";
            echo "<td>" . $rowins['gender'] . "</td>";
            echo "<td>" . $rowins['religious'] . "</td>";
            echo "<td>" . $rowins['caste_detail'] . "</td>";
            echo "<td>" . $rowins['income'] . "</td>";
            echo "<td>" . $rowins['domocile'] . "</td>";
            echo "<td>" . $rowins['bank_account'] . "</td>";
            echo "<td>" . $rowins['ifsc'] . "</td>";
            // echo "<td><a href='see_students.php?institute_name=$institute_coolege_name'>View</a></td>";
            echo "</tr>";
            // $serialNumber++;
            
            }
            echo "</table>";

            echo "<table border=2>";
        
echo "<caption style='color: red; text-align: left;'>Address Information</caption>";

    // echo "<th>user_id</th>";
            echo "<th>user_id</th>";
            echo "<th>address</th>";
            echo "<th>state</th>";
            echo "<th>district</th>";
            echo "<th>taluka</th>";
            echo "<th>village</th>";
            echo "<th>pincode</th>";
            

        while ($rowins = mysqli_fetch_assoc($result_for_address)) {
           
            echo "<tr>";
            // echo "<td>" . $serialNumber . "</td>";
            echo "<td>" . $rowins['user_id'] . "</td>";
            echo "<td>" . $rowins['address'] . "</td>";
            echo "<td>" . $rowins['state'] . "</td>";
            echo "<td>" . $rowins['district'] . "</td>";
            echo "<td>" . $rowins['taluka'] . "</td>";
            echo "<td>" . $rowins['village'] . "</td>";
            echo "<td>" . $rowins['pincode'] . "</td>";
            // echo "<td><a href='see_students.php?institute_name=$institute_coolege_name'>View</a></td>";
            echo "</tr>";
            // $serialNumber++;
            
            }
            echo "</table>";
            echo "<table border=2>";







            echo "<caption style='color: red; text-align: left;'>Current Course</caption>";

    // echo "<th>user_id</th>";
            echo "<th>user_id</th>";
            echo "<th>admission_year</th>";
            echo "<th>institute_state</th>";
            echo "<th>institute_district</th>";
            echo "<th>college_name</th>";
            echo "<th>course</th>";
            echo "<th>qualification</th>";
            echo "<th>stream</th>";
            echo "<th>admission_type</th>";
            echo "<th>marks</th>";
            echo "<th>cap_id</th>";
            echo "<th>study_year</th>";
            echo "<th>status</th>";
            echo "<th>admission_category</th>";
            echo "<th>gap_year</th>";
            echo "<th>mode</th>";
            

        while ($rowins = mysqli_fetch_assoc($result_for_current_course)) {
           
            echo "<tr>";
            // echo "<td>" . $serialNumber . "</td>";
            echo "<td>" . $rowins['user_id'] . "</td>";
            echo "<td>" . $rowins['admission_year'] . "</td>";
            echo "<td>" . $rowins['institute_state'] . "</td>";
            echo "<td>" . $rowins['institute_district'] . "</td>";
            echo "<td>" . $rowins['collge_name'] . "</td>";
            echo "<td>" . $rowins['course'] . "</td>";
            echo "<td>" . $rowins['qualification'] . "</td>";
            echo "<td>" . $rowins['stream'] . "</td>";
            echo "<td>" . $rowins['admission_type'] . "</td>";
            echo "<td>" . $rowins['marks'] . "</td>";
            echo "<td>" . $rowins['cap_id'] . "</td>";
            echo "<td>" . $rowins['study_year'] . "</td>";
            echo "<td>" . $rowins['status'] . "</td>";
            echo "<td>" . $rowins['admission_category'] . "</td>";
            echo "<td>" . $rowins['gap_year'] . "</td>";
            echo "<td>" . $rowins['mode'] . "</td>";
            // echo "<td><a href='see_students.php?institute_name=$institute_coolege_name'>View</a></td>";
            echo "</tr>";
            // $serialNumber++;
            
            }
            echo "</table>";


            echo "<table border=2>";







            echo "<caption style='color: red; text-align: left;'>Past Qualification</caption>";

    // echo "<th>user_id</th>";
            echo "<th>user_id</th>";
            echo "<th>qualification</th>";
            echo "<th>stream</th>";
            echo "<th>completed</th>";
            echo "<th>institute_state</th>";
            echo "<th>institute_region</th>";
            echo "<th>school_name</th>";
            echo "<th>board_university</th>";
            echo "<th>course</th>";
            echo "<th>mode</th>";
            echo "<th>admission_year</th>";
            echo "<th>passing_year</th>";
            echo "<th>result</th>";
            // echo "<th>admission_category</th>";
            echo "<th>percentage</th>";
            echo "<th>attempts</th>";
            echo "<th>marksheet</th>";
            

        while ($rowins = mysqli_fetch_assoc($result_for_past_qualification)) {
           
            echo "<tr>";
            // echo "<td>" . $serialNumber . "</td>";
            echo "<td>" . $rowins['user_id'] . "</td>";
            echo "<td>" . $rowins['qualification'] . "</td>";
            echo "<td>" . $rowins['stream'] . "</td>";
            echo "<td>" . $rowins['completed'] . "</td>";
            echo "<td>" . $rowins['institute_state'] . "</td>";
            echo "<td>" . $rowins['institute_region'] . "</td>";
            echo "<td>" . $rowins['school_name'] . "</td>";
            echo "<td>" . $rowins['board_university'] . "</td>";
            echo "<td>" . $rowins['course'] . "</td>";
            echo "<td>" . $rowins['mode'] . "</td>";
            echo "<td>" . $rowins['admission_year'] . "</td>";
            echo "<td>" . $rowins['passing_year'] . "</td>";
            echo "<td>" . $rowins['result'] . "</td>";
            // echo "<td>" . $rowins['admission_category'] . "</td>";
            echo "<td>" . $rowins['percentage'] . "</td>";
            echo "<td>" . $rowins['attempts'] . "</td>";
            echo "<td>" . $rowins['marksheet'] . "</td>";
            // echo "<td><a href='see_students.php?institute_name=$institute_coolege_name'>View</a></td>";
            echo "</tr>";
            // $serialNumber++;
            
            }
            echo "</table>";


            echo "<a href='08_Accept_By_Institute.php?user_id=$user_id'><input type='button' value='Accept'></a>";
            echo "<input type='button' value='Reject'>";

    }
} else {
    echo "No user ID provided";
}
?>
