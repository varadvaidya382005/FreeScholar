<?php
require 'connection.php';
 
$uname=$_GET['uname'];
// echo $uname;
$addhar_number=$_POST['addhar_number'];
$fullname=$_POST['Applicant_Full_Name'];
$email=$_POST['Email_id'];
echo $email;
$mobileNo=$_POST['Mobile_Number'];
$dob=$_POST['Date_of_Birth'];
$gender=$_POST['Gender'];
$religious=$_POST['Religious_details'];
$bankNo=$_POST['Bank_Account_No'];
$ifsc=$_POST['IFSC'];
$casteDetail=$_FILES["caste_detail"]["name"];
    $casteTempName = $_FILES["caste_detail"]["tmp_name"];
    $castePath = 'UploadImage/caste';
    $casteExtension = strtolower(pathinfo($casteDetail, PATHINFO_EXTENSION));
    
    $income = $_FILES["Income_Details"]["name"];
    $incomeTempName = $_FILES["Income_Details"]["tmp_name"];
    $incomePath = 'UploadImage/income';
    $incomeExtension =strtolower(pathinfo($income, PATHINFO_EXTENSION));

    
    $domicle = $_FILES["Domicile_Details"]["name"];
    $domicleTempName = $_FILES["Domicile_Details"]["tmp_name"];
    $domiclePath = 'UploadImage/domicle';
    $domicleExtension =strtolower(pathinfo($domicle, PATHINFO_EXTENSION));

if(isset($_POST['submit_btn']))
{

   
    
    move_uploaded_file($casteTempName, $castePath .'/' .$casteDetail);


    move_uploaded_file($incomeTempName, $incomePath.'/'. $income);



    move_uploaded_file($domicleTempName, $domiclePath.'/'. $domicle);

    

    $validImageExtension = ['pdf','jpg', 'jpeg', 'png'];

    if (!in_array($casteExtension, $validImageExtension) || !in_array($incomeExtension, $validImageExtension) || !in_array($domicleExtension, $validImageExtension))
    {
        echo "<script>alert('Invalid Image Extension');
        window.location='01_user_info.php?uname=$uname';
        </script>";
    }
    elseif ($_FILES["caste_detail"]["size"] > 5000000 || $_FILES["Income_Details"]["size"] > 5000000 || $_FILES["Domicile_Details"]["size"] > 5000000)
    {
        echo "<script>alert('Image Size Is Too Large');</script>";
    }
    else
    {
        $qry="INSERT INTO user_info(user_name,aadhar_no,applicant_name,email,mobile_no,dob,gender,caste,caste_detail,income,domocile,bank_account,ifsc) VALUES ('$uname','$addhar_number','$fullname','$email','$mobileNo','$dob','$gender','$religious','$casteDetail','$income','$domicle','$bankNo','$ifsc')";
     
        $insert=mysqli_query($conn,$qry); 

        if ($insert) {
            echo "<script>alert('Your data has been saved ');
             window.location='/capstoneProject/CPP/02_address_info.php?uname=$uname';
            </script>";
        } 
            else {
            echo "<script>alert('Fail to insert data');
            window.location='/capstoneProject/CPP/01_user_info.php?uname=$uname';
            </script>";
             }
    }
}


if(isset($_POST['update-btn'])){
    $query="UPDATE `user_info` SET `aadhar_no`='$addhar_number', `applicant_name`='$fullname', `email`='$email', `mobile_no`='$mobileNo', `dob`='$dob', `gender`='$gender', `caste`='$religious',  `income`='$income',  `bank_account`='$bankNo', `ifsc`='$ifsc' WHERE `user_name`='$uname'";

    $res=mysqli_query($conn,$query);
    if($res){
        echo "UPDATED";
        
        echo "<script>alert('Your data has been UPDATED ');
        window.location='/capstoneProject/CPP/02_address_info.php?uname=$uname';
       </script>";
    }else{
        echo "NOT UPDATED";
        echo "<script>alert('Fail to update data');
        window.location='/capstoneProject/CPP/01_user_info.php?uname=$uname';
        </script>";
       
    }
}

?>
