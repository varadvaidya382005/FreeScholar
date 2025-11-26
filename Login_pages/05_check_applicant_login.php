<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "capstoen_project";

$con = mysqli_connect($server,$username,$password,$database);

$user_name_applicant_login = $_POST['username_for_applicant_login'];
$password_applicant_login = $_POST['password_for_applicant_login'];

$query_fetch = "SELECT * from `check_applicant_login` where username = '$user_name_applicant_login' and password = '$password_applicant_login'";

$res_fetch = mysqli_query($con, $query_fetch);

$num_of_rows = mysqli_num_rows($res_fetch);
echo "::::::$num_of_rows";

if ($num_of_rows == 1) {
    session_start();
       $_SESSION['loggedin']=true;
   $_SESSION['username']=$user_name_applicant_login;
    echo "
    <script>
    alert('Username and password are correct');
    window.location='/capstoneProject/CPP/01_user_info.php?uname=$user_name_applicant_login';
    </script>";
    
} else {
    
  echo " <script>
    alert('Username or password is incorrect');
    window.location='03_03_login_form_applicant.html';
    </script>
    ";
}
?>
