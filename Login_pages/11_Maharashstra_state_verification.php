
<?php

require("06_Connection_for_Institute_Verification.php");
$query = "SELECT * FROM `status` WHERE institute_status = 'Accepted' AND current_state_status = 'Accepted'"; 
$res = mysqli_query($con1, $query);
if (!$res) {
    echo "Error: " . mysqli_error($con1);
} else {
    // Display the data in a table format
    echo "<table border='1'>
            <tr>
                <th>User ID</th>
                <th>View</th>
            </tr>";
    
    // Fetch and display each row of data
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        $usernamedata =$row['user_name'] ;
        echo "<td>" . $row['user_name'] . "</td>";
        echo "<td>" . "<a href='11_see_the_students.php?user_name=$usernamedata'><button>View</button></a>". "</td>";
        // Add more columns as per your database schema
        echo "</tr>";
    }
    echo "</table>";
}
?>
