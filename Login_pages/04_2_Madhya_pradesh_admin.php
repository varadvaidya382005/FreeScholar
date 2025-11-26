<?php
// Include the database connection file
require("06_Connection_for_Institute_Verification.php");

// Query to select data from current_course where institute_state is 'Delhi' and institute_status is 'Accepted'
$query = "SELECT cc.* 
          FROM `current_course` cc
          INNER JOIN `status` s ON cc.user_name = s.user_name
          WHERE cc.institute_state='Madhya_Pradesh' AND s.institute_status='Accepted'";
$result = mysqli_query($con1, $query);

if (!$result) {
    echo "Error: " . mysqli_error($con1);
} else {
    // Display the data in a table format
    echo "<table border='1'>
            <tr style='background-color: aqua;'>
                <th>User ID</th>
                <th>Admission Year</th>
                <th>Institute State</th>
                <th>Institute District</th>
                <th>College Name</th>
                <!-- Add more columns as per your database schema -->
            </tr>";
    
    // Fetch and display each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        $usernamedata =$row['user_name'] ;
        echo "<td>" . $row['user_name'] . "</td>";
        echo "<td>" . $row['admission_year'] . "</td>";
        echo "<td>" . $row['institute_state'] . "</td>";
        echo "<td>" . $row['institute_district'] . "</td>";
        echo "<td>" . "<a href='10_see_Madhya_pradesh_students.php?user_name=$usernamedata'><button>View</button></a>". "</td>";
        // Add more columns as per your database schema
        echo "</tr>";
    }
    echo "</table>";
}

// Close the database connection
mysqli_close($con1);
?>
