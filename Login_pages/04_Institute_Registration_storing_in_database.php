<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "capstoen_project";

$con = mysqli_connect($server,$username,$password,$database);

$institute_name = $_REQUEST['insitute_name'];
$institute_code = $_REQUEST['institute_code'];
$institute_state = $_REQUEST['institute_state']; 
$institute_region = $_REQUEST['institute_region'];
$institute_address = $_REQUEST['institute_address'];
$institute_contact_number = $_REQUEST['institute_contact_number'];
$institute_email = $_REQUEST['institute_email'];
$institute_type = $_REQUEST['institute_type'];
$institute_username = $_REQUEST['institute_username'];
$institute_password = $_REQUEST['institute_password'];


$query_fetch = "INSERT INTO institute_data (
    institute_name,
    institute_code,
    institute_state,
    institute_region,
    institute_address,
    institute_contact,
    institute_email,
    institute_type,
    institute_username,
    institute_password

) VALUES (
    '$institute_name',
    '$institute_code',
    '$institute_state',
    '$institute_region',
    '$institute_address',
    '$institute_contact_number',
    '$institute_email',
    '$institute_type',
    '$institute_username',
    '$institute_password'
)";


$res_fetch = mysqli_query($con, $query_fetch);

if($res_fetch)
{
    echo"institute involved";
}
else
{
    echo"institute involved";
    
}
?>
<script>
alert("Institute Successully Registered");
window.location ="01_home_page.html";
</script>