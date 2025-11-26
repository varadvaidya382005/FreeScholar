<?php
require 'connection.php';

$uname = isset($_GET["uname"]) ? $_GET["uname"] : null;
echo $uname;

if (isset($_POST['submit_btn']) && $uname !== null) {
    $qualification = $_POST['Qualification_Level'];
    $Stream = $_POST['Stream'];
    $completed = $_POST['Completed'];
    $institute_state = $_POST['Institute_State'];
    $institute_region = $_POST['instituteDistrict'];
    $school_name = $_POST['schoolname'];
    $Board_University = $_POST['Board_University'];
    $Course = $_POST['Course'];
    $Mode = $_POST['Mode'];
    $Admission_Year = $_POST['Admission_Year'];
    $Passing_Year = $_POST['Passing_Year'];
    $Result = $_POST['Result'];
    $Percentage = $_POST['Percentage'];
    $Attempts = $_POST['Attempts'];
    
    $Upload_Marksheet = $_FILES["Upload_Marksheet"]["name"];
    $Upload_Marksheet_TempName = $_FILES["Upload_Marksheet"]["tmp_name"];
    $Upload_Marksheet_Path = 'UploadImage/marksheet';
    $Upload_Marksheet_Extension = strtolower(pathinfo($Upload_Marksheet, PATHINFO_EXTENSION));
    

    move_uploaded_file($Upload_Marksheet_TempName, $Upload_Marksheet_Path . '/' . $Upload_Marksheet);
    $validImageExtension = ['pdf','jpg', 'jpeg', 'png'];

    if (!in_array($Upload_Marksheet_Extension, $validImageExtension)) {
        echo "<script>alert('Only PDF is Accepted');</script>";
    } elseif ($_FILES["Upload_Marksheet"]["size"] > 5000000) {
        echo "<script>alert('File Size Is Too Large');</script>";
    } else {
        $qry = "INSERT INTO `past_qualification`(`user_name`, `qualification`, `stream`, `completed`, `institute_state`, `institute_region`, `school_name`, `board_university`, `course`, `mode`, `admission_year`, `passing_year`, `result`, `percentage`, `attempts`, `marksheet`) VALUES ('$uname', '$qualification', '$Stream', '$completed', '$institute_state', '$institute_region', '$school_name', '$Board_University', '$Course', '$Mode', '$Admission_Year', '$Passing_Year', '$Result', '$Percentage', '$Attempts', '$Upload_Marksheet')";

        $stmt = mysqli_query($conn, $qry);

        if ($stmt) {
            echo "<script>alert('Your data has been saved '); window.location='/capstoneProject/CPP/form_fill.php?uname=$uname';</script>";
            exit();
        } else {
            echo "<script>alert('Failed to insert data. Error: " . mysqli_error($conn) . "'); window.location='/capstoneProject/CPP/03_current_course.php?uname=$uname';</script>";
            exit();
        }
    }
}
if (isset($_POST['update_btn']) && $uname !== null) {
    $qualification = $_POST['Qualification_Level'];
    $Stream = $_POST['Stream'];
    $completed = $_POST['Completed'];
    $institute_state = $_POST['Institute_State'];
    $institute_region = $_POST['instituteDistrict'];
    $school_name = $_POST['schoolname'];
    $Board_University = $_POST['Board_University'];
    $Course = $_POST['Course'];
    $Mode = $_POST['Mode'];
    $Admission_Year = $_POST['Admission_Year'];
    $Passing_Year = $_POST['Passing_Year'];
    $Result = $_POST['Result'];
    $Percentage = $_POST['Percentage'];
    $Attempts = $_POST['Attempts'];
    $Upload_Marksheet = $_FILES["Upload_Marksheet"]["name"];
    $Upload_Marksheet_TempName = $_FILES["Upload_Marksheet"]["tmp_name"];
    $Upload_Marksheet_Path = 'UploadImage/marksheet';
    $Upload_Marksheet_Extension = strtolower(pathinfo($Upload_Marksheet, PATHINFO_EXTENSION));
    

    move_uploaded_file($Upload_Marksheet_TempName, $Upload_Marksheet_Path . '/' . $Upload_Marksheet);
    $validImageExtension = ['pdf'];

    if (!in_array($Upload_Marksheet_Extension, $validImageExtension)) {
        echo "<script>alert('Only PDF is Accepted');</script>";
    } elseif ($_FILES["Upload_Marksheet"]["size"] > 5000000) {
        echo "<script>alert('File Size Is Too Large');</script>";
    } else {
        $query = "UPDATE `past_qualification` SET `qualification`='$qualification', `stream`='$Stream', `completed`='$completed', `institute_state`='$institute_state', `institute_region`='$institute_region', `school_name`='$school_name', `board_university`='$Board_University', `course`='$Course', `mode`='$Mode', `admission_year`='$Admission_Year', `passing_year`='$Passing_Year', `result`='$Result', `percentage`='$Percentage', `attempts`='$Attempts', `marksheet`='$Upload_Marksheet' WHERE `user_name`='$uname'";

        $res = mysqli_query($conn, $query);
        if($res){
            echo "UPDATED";
            echo "<script>alert('Your data has been UPDATED '); window.location='/capstoneProject/CPP/form_fill.php?uname=$uname';</script>";
        }else{
            echo "NOT UPDATED";
            echo "<script>alert('Fail to update data'); window.location='/capstoneProject/CPP/02_address_info.php?uname=$uname';</script>";
        }
    }
}
?>
