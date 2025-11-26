<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "capstoen_project";

$con = mysqli_connect($server,$username,$password,$database);

$institute_username = $_REQUEST['username_for_institute_login'];
$institute_password = $_REQUEST['password_for_institute_login'];

$query_fetch = "SELECT * from `institute_data` where institute_username = '$institute_username' and institute_password = '$institute_password'";

$res_fetch = mysqli_query($con, $query_fetch);

$num_of_rows = mysqli_num_rows($res_fetch);
echo "::::::$num_of_rows";

if ($num_of_rows == 1) {
    ?>
    <script>
    alert("Username and password are correct");
    window.location="06_Institute_verification.php?institute_username=<?php echo $institute_username; ?>";
    </script>
    <?php
} else {
    ?>
    <script>
    alert("Username or password is incorrect");
    window.location="05_check_institute_login.php";
    </script>
    <?php
}
?>
