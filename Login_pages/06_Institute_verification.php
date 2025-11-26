<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institute Verification</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #1b61e3c8;
        }
    </style>
</head>
<body>
    <?php
    require('06_Connection_for_Institute_Verification.php');
    if (isset($_GET['institute_username'])) {
        $institute = $_GET['institute_username'];
        echo "hello:$institute";
        // Using prepared statements to prevent SQL injection
        $query_for_institute_login = "SELECT * FROM `institute_data` WHERE institute_username = ?";
        $stmt = mysqli_prepare($con2, $query_for_institute_login);
        mysqli_stmt_bind_param($stmt, "s", $institute);
        mysqli_stmt_execute($stmt);
        $result_fetch_institute_login = mysqli_stmt_get_result($stmt);
        
        if ($result_fetch_institute_login) {
            $num_of_rows = mysqli_num_rows($result_fetch_institute_login);
            if ($num_of_rows == 1) {
                echo "<table border=2>";
                echo "<th>SRNO</th>";
                echo "<th>institute_name</th>";
                // echo "<th>institute_code</th>";
                echo "<th>institute_state</th>";
                // echo "<th>institute_region</th>";
                echo "<th>institute_address</th>";
                echo "<th>institute_contact</th>";
                echo "<th>institute_email</th>";
                echo "<th>institute_type</th>";
                echo "<th>institute_username</th>";
                echo "<th>institute_password</th>";
                echo "<th>Status</th>";
                
                $serialNumber = 1; // Initialize serial number
                while ($rowins = mysqli_fetch_assoc($result_fetch_institute_login)) {
                    $institute_coolege_name = $rowins['institute_name'];
                    echo "$institute_coolege_name";
                
                    echo "<tr>";
                    echo "<td>" . $serialNumber . "</td>";
                    echo "<td>" . $rowins['institute_name'] . "</td>";
                    // echo "<td>" . $rowins['institute_code'] . "</td>";
                    echo "<td>" . $rowins['institute_state'] . "</td>";
                    // echo "<td>" . $rowins['institute_region'] . "</td>";
                    echo "<td>" . $rowins['institute_address'] . "</td>";
                    echo "<td>" . $rowins['institute_contact'] . "</td>";
                    echo "<td>" . $rowins['institute_email'] . "</td>";
                    echo "<td>" . $rowins['institute_type'] . "</td>";
                    echo "<td>" . $rowins['institute_username'] . "</td>";
                    echo "<td>" . $rowins['institute_password'] . "</td>";
                    echo "<td><a href='see_students.php?institute_name=$institute_coolege_name'>View</a></td>";
                    echo "</tr>";
                    $serialNumber++;
                    
                    }
                echo "</table>";
            } else {
                // Duplicacy of institute
                echo "Incorrect Institute Fetching Information";
            }
        } else {
            echo "Error fetching institute data: " . mysqli_error($con2);
        }
    } else {
        // Handle the case where the institute username parameter is not set in the URL
        echo "Institute username parameter is missing in the URL.";
    }
    ?>
</body>
</html>
