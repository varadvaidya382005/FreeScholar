<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "capstoen_project";

$con = mysqli_connect($server,$username,$password,$database);


// if($con)
// {
//     echo 'connection';
// }
// else{
//     echo "no connection";
// }

$uname =$_REQUEST['username_selection'];
$pass = $_REQUEST['password_generation'];



// echo "$uname";
// echo "$pass";

// $query= "INSERT INTO 'form_table'(username,password,uid)VALUES('$uname','$pass','1')";
$query_insert = "INSERT INTO `check_applicant_login` (username, password, uid) VALUES ('$uname', '$pass', '')";

$query_check_username = "SELECT * FROM `check_applicant_login` WHERE username = '$uname'";
$res_check_username = mysqli_query($con, $query_check_username);

if (mysqli_num_rows($res_check_username) > 0) {
    echo "alert(Username '$uname' is not available. Please choose a different username.)";
    ?>
    <script>
    alert("username not available please refill the form again ")
    window.location="02_New_Registration.html"
    </script>
    <?php
}
else
{
$res_insert = mysqli_query($con,$query_insert);

// if($res_insert)
// {
//     echo "inserted data<br>";
// }
// else
// {
//     echo "not inserted data<br>";
// }
}
// find the total numbers of rows
$query_fetch = "SELECT * FROM `check_applicant_login` ";

$res_fetch = mysqli_query($con,$query_fetch);

$num_of_rows = mysqli_num_rows($res_fetch);

echo "Number of Students Filled the form:$num_of_rows<br>";


//Fetch the data:
// if ($num_of_rows > 0) {
//     while ($row = mysqli_fetch_assoc($res_fetch)) {
//         print_r($row);
//         echo "<br>";
//
// } else {
//     echo "No rows found<br>";
// }

if ($num_of_rows > 0) {
    echo "<table border='5'>";
    echo "<tr>";
    echo "<th>UID</th>";
    echo "<th>Username</th>";
    echo "<th>Password</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($res_fetch)) {
        echo "<tr>";
        echo "<td>" . $row['uid'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No rows found<br>";
}





?><script>window.location = "03_03_login_form_applicant.html"</script>