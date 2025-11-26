<?php

require('connection.php');
$un=$_GET['uname'];
$query1= "SELECT * FROM `user_info` WHERE `user_name` LIKE '$un'";
$res1=mysqli_query($conn,$query1);
$val1=mysqli_fetch_array($res1);
$query2="SELECT * FROM `address_info` WHERE `user_name` LIKE '$un'";
$res2=mysqli_query($conn,$query2);
$val2=mysqli_fetch_array($res2);
$query3="SELECT * FROM `current_course` WHERE `user_name` LIKE '$un'";
$res3=mysqli_query($conn,$query3);
$val3=mysqli_fetch_array($res3);
$query4="SELECT * FROM `past_qualification` WHERE `user_name` LIKE '$un'";
$res4=mysqli_query($conn,$query4);
$val4=mysqli_fetch_array($res4);

$caste=$val1['caste'];
$caste_certificate=$val1['caste_detail'];
$domicile=$val1['domocile'];
$income=$val1['income'];
$account_no=$val1['bank_account'];
$address=$val2['address'];
$last_sem_marksheet=$val3['marksheet'];
$ssc_marksheet=$val4['marksheet'];
$uname=$val4['user_name'];

if(isset($_POST['btn'])){
    $scheme_selected=$_POST['schemes'];
    $isValid=false;
    if($scheme_selected==$caste){
        $insert1="INSERT INTO `user_from`(`user_name`, `schmes`, `caste`, `caste_certificate`, `domicile`, `income_certificate`, `account_no`, `address`, `last_sem_marksheet`, `ssc_marksheet`) VALUES ('$uname','POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS','$caste','$caste_certificate','$domicile','$income','$account_no','$address','$last_sem_marksheet','$ssc_marksheet')";

        $result=mysqli_query($conn,$insert1);
        $isValid=true;
        if($result){
            echo "<script>alert('Your scheme has been applied ')</script>";
        }
    }elseif($scheme_selected==$caste)
    {
        $insert1="INSERT INTO `user_from`(`user_name`, `schmes`, `caste`, `caste_certificate`, `domicile`, `income_certificate`, `account_no`, `address`, `last_sem_marksheet`, `ssc_marksheet`) VALUES ('$uname','POST MATRIC SCHOLARSHIP TO OPEN STUDENTS','$caste','$caste_certificate','$domicile','$income','$account_no','$address','$last_sem_marksheet','$ssc_marksheet')";
        $isValid=true;
        $result=mysqli_query($conn,$insert1);
        if($result){
            echo "<script>alert('Your scheme has been applied ')</script>";
        }
    }
    elseif($scheme_selected==$caste){
        $insert1="INSERT INTO `user_from`(`user_name`, `schmes`, `caste`, `caste_certificate`, `domicile`, `income_certificate`, `account_no`, `address`, `last_sem_marksheet`, `ssc_marksheet`) VALUES ('$uname','POST MATRIC SCHOLARSHIP TO SC STUDENTS','$caste','$caste_certificate','$domicile','$income','$account_no','$address','$last_sem_marksheet','$ssc_marksheet')";
       
        $result=mysqli_query($conn,$insert1);
        $isValid=true;
        if($result){
            echo "<script>alert('Your scheme has been applied ')</script>";
        }
    }
    elseif($scheme_selected==$caste){
        $insert1="INSERT INTO `user_from`(`user_name`, `schmes`, `caste`, `caste_certificate`, `domicile`, `income_certificate`, `account_no`, `address`, `last_sem_marksheet`, `ssc_marksheet`) VALUES ('$uname','POST MATRIC SCHOLARSHIP TO ST STUDENTS','$caste','$caste_certificate','$domicile','$income','$account_no','$address','$last_sem_marksheet','$ssc_marksheet')";

        $result=mysqli_query($conn,$insert1);
        $isValid=true;
        if($result){
            echo "<script>alert('Your scheme has been applied ')</script>";
        }

    }
    elseif($scheme_selected==$caste){
        $insert1="INSERT INTO `user_from`(`user_name`, `schmes`, `caste`, `caste_certificate`, `domicile`, `income_certificate`, `account_no`, `address`, `last_sem_marksheet`, `ssc_marksheet`) VALUES ('$uname','POST MATRIC SCHOLARSHIP TO NT STUDENTS','$caste','$caste_certificate','$domicile','$income','$account_no','$address','$last_sem_marksheet','$ssc_marksheet')";

        $result=mysqli_query($conn,$insert1);
        $isValid=true;
        if($result){
            echo "<script>alert('Your scheme has been applied ')</script>";
        }
    }

    if(!$isValid){
        echo "<script>alert('This scheme not suitable for you');
        window.location='/capstoneProject/CPP/form_fill.php?uname=$un';
        </script>";
    }
}

?>