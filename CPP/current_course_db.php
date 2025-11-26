 <?php
require("connection.php");
$uname=$_GET["uname"];
$admision_year=$_POST['admissionyear'];
$state=$_POST['state'];
$district=$_POST['Institute_District'];
$college_name=$_POST['College_name'];
$course=$_POST['Course'];
$qualify_level=$_POST['Qualification_Level'];
$stream=$_POST['s1'];
$admisiion_type=$_POST['admission_type'];
$marks=$_POST['percentage'];
$cap_id1=$_POST['cap_id'];
$study_year=$_POST['year_study'];
$status=$_POST['status'];
$categoery=$_POST['cateogery'];
$gap_yearr=$_POST['gap_year'];
$mode=$_POST['Mode'];

$Upload_Marksheet = $_FILES["Upload_Marksheet"]["name"];
$Upload_Marksheet_TempName = $_FILES["Upload_Marksheet"]["tmp_name"];
$Upload_Marksheet_Path = 'UploadImage/SEMESTER';
$Upload_Marksheet_Extension = strtolower(pathinfo($Upload_Marksheet, PATHINFO_EXTENSION));
move_uploaded_file($Upload_Marksheet_TempName, $Upload_Marksheet_Path . '/' . $Upload_Marksheet);
    $validImageExtension = ['pdf','jpg', 'jpeg', 'png'];

if(isset($_POST['submit_btn']))
{

    if (!in_array($Upload_Marksheet_Extension, $validImageExtension)) {
        echo "<script>alert('Only PDF is Accepted');</script>";
    } elseif ($_FILES["Upload_Marksheet"]["size"] > 5000000) {
        echo "<script>alert('File Size Is Too Large');</script>";
    } else {
$query="INSERT INTO `current_course`(`admission_year`, `institute_state`, `institute_district`, `collge_name`, `course`, `qualification`, `stream`, `admission_type`, `marks`, `cap_id`, `study_year`, `status`,`marksheet`, `admission_category`, `gap_year`, `mode`, `user_name`) VALUES ('$admision_year','$state','$district','$college_name','$course','$qualify_level','$stream','$admisiion_type','$marks','$cap_id1','$study_year','$status','$Upload_Marksheet','$categoery','$gap_yearr','$mode','$uname')";


$result=mysqli_query($conn,$query);
if($result){
    echo "<script>alert('Your data has been saved ')
    window.location='/capstoneProject/CPP/04_past_qualifications.php?uname=$uname';
    </script>";
   
}else{
    echo "<script>alert('Error in posted data')
    window.location='/capstoneProject/CPP/03_current_course.php?uname=$uname';
    </script>";
    
}

}
} 
if(isset($_POST['update-btn'])){
    $query="UPDATE `current_course` SET `admission_year`='$admision_year',`institute_state`='$state',`institute_district`='$district',`collge_name`='$college_name',`course`='$course',`qualification`='$qualify_level',`stream`='$stream',`admission_type`='$admisiion_type',`marks`='$marks',`cap_id`='$cap_id1',`study_year`='$study_year',`status`='$status',
    `marksheet`='$Upload_Marksheet',`admission_category`='$categoery',`gap_year`='$gap_yearr',`mode`='$mode' WHERE `user_name`='$uname'";
    $result=mysqli_query($conn,$query);
if($result){
    echo "<script>alert('Your data has been updated ')
    window.location='/capstoneProject/CPP/04_past_qualifications.php?uname=$uname';
    </script>";
   
}else{
    echo "<script>alert('Error in posted data')
    window.location='/capstoneProject/CPP/03_current_course.php?uname=$uname';
    </script>";
    
}
    
}

?> 