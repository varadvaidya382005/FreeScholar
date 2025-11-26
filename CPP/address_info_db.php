<?php
require('connection.php');



if (isset($_POST['submit_btn'])) {
    $uname = $_GET['uname'];
$address =$_POST['validationCustom01'] ;
$state =  $_POST['Institute_State'] ;
$district = $_POST['Institute_District'];
$taluka =  $_POST['Taluka'] ;
$village = $_POST['validationCustom05'] ;
$pincode =  $_POST['validationCustom06'];
    
   
    $query = "INSERT INTO `address_info`(`user_name`, `address`, `state`, `district`, `taluka`, `village`, `pincode`) VALUES ('$uname','$address','$state','$district','$taluka','$village','$pincode');";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Your data has been saved '); window.location='/capstoneProject/CPP/03_current_course.php?uname=$uname';</script>";
        exit(); 
    } else {
        echo "<script>alert('Error in posted data'); window.location='/capstoneProject/CPP/02_address_info.php?uname=$uname';</script>";
        exit(); 
    }
}

if (isset($_POST['update-btn'])) {
  
    $uname =  $_GET['uname'];
    $address =$_POST['validationCustom01'] ;
    $state =  $_POST['Institute_State'] ;
    $district = $_POST['Institute_District'];
    $taluka =  $_POST['Taluka'] ;
    $village = $_POST['validationCustom05'] ;
    $pincode =  $_POST['validationCustom06'];

   
    $query = "UPDATE `address_info` SET `address`='$address', `state`='$state', `district`='$district', `taluka`='$taluka', `village`='$village', `pincode`='$pincode' WHERE `user_name`='$uname'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Your data has been updated '); window.location='/capstoneProject/CPP/03_current_course.php?uname=$uname';</script>";
    } else {
        echo "<script>alert('Error in updating data'); window.location='/capstoneProject/CPP/03_current_course.php?uname=$uname';</script>";

    }
}
?>
