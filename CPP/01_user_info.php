<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        require 'connection.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>User_INFO</title>
    <script src="01_user_info.js"></script> 
    <style>
    #update_heading {
            color: #e8b038;
        }

        hr {
            height: 2px;
            background-color: #0ff5cb;
            border: none;
            margin-bottom: 20px;
        }

        #personal_details {
            display: inline-block;
            border: 2px solid #e1ede9;
            color: #2e81e6;
            background: #e3edfa;
            padding: 4px;
            border-radius: 8px;
        }

        .adjustment_label {
            margin-left: 160px;
        }

        .adjustment_textfield {
            margin-left: 150px;
        }
    </style>
</head>
<body>

<?php 
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $uname = $_SESSION["username"];
    echo "<h1>Welcome ".$uname."</h1>";
} else {
    "<script>window.location('Login_Pages/03_03_login_form_applicant.html');</script>";
    exit();
}


?>
<?php


?>


<?php

$query="SELECT * FROM `user_info` WHERE `user_name` LIKE '$uname' ";
$res=mysqli_query($conn,$query);
$num_of_rows = mysqli_num_rows($res);
if($num_of_rows==1){

    $arr=mysqli_fetch_array($res);
    $adhar=$arr['aadhar_no'];
    $nam1=$arr['applicant_name'];
    $email=$arr['email'];
    $mobile=$arr['mobile_no'];
    $dob=$arr['dob'];
    $caste_detail=$arr['caste_detail'];
    $income=$arr['income'];
    $domicile=$arr['domocile'];
    $bank=$arr['bank_account'];
    $ifsc=$arr['ifsc'];
   
}
    ?>
<form action=<?php echo "user_info_db.php?uname=$uname";?> method="post" enctype="multipart/form-data" >

    <div class="container">
        <h1 id="update_heading">Update Profile</h1>
        <hr>
        
    </div>
    
    <div class="container">
        <h3 id="personal_details">Personal Details</h3>
    </div>
    <div class="container">
<label for="addhar_number">Addhar Number</label><br>
<input type="text" name="addhar_number" id="addharnumber" required placeholder="ex: xxxx-xxxx-xxxx" onblur="addhar_valid();" value=<?php
 if(!$num_of_rows==1){echo "";}else{
     echo "$adhar";
 };?>><br>
<label id="addhar_number_label"></label>
</div>

<div class="container">
    <br><label for="Name">Name</label><br>
    <input type="text" name="Name" required id="Fname" onblur="Name_valid();" value=<?php if(!$num_of_rows==1){echo "";}else{ echo "$nam1";}
 ?>><br>
    <label id="Name_label"></label>
</div><br>

<div id="container">
    
    <div class="alert alert-danger alert-dismissible" role="alert">  <div>Note: If you enter/change the Email ID then verification is mandatory and OTP will send to entered Email ID.</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>


<div class="container">
    <br><label for="Email_id">Email ID</label><br>
    <input type="text" name="Email_id" id="Email_id" required placeholder="ex: username@gmail.com" onblur="Email_id_valid();" value=<?php if(!$num_of_rows==1){echo "";}else{ echo "$email";}
 ?>><br>
    <label id="Email_id_label" ></label>
</div><br>


<div class="alert alert-danger alert-dismissible" role="alert">  <div>Note: If you change the Mobile Number then verification is mandatory and OTP will send to entered Mobile Number.</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>


<div class="container">
    <br><label for="Mobile_Number">Mobile Number</label><br>
    <input type="text" name="Mobile_Number" id="Mobile_Number"  required onblur="Mobile_Number_valid();" value=<?php if(!$num_of_rows==1){echo "";}else{echo "$mobile";}
 ?>><br>
    <label id="Mobile_Number_label" ></label>
</div><br>

<div class="container">
    <br><label for="Date_of_Birth">Date of Birth(As per Addhar)</label>
    <label for="Age" class="adjustment_label">Age</label>
    <label for="Gender" style="margin-left:310px">Gender</label>
</div>
<div class="container">
    <input type="text" name="Date_of_Birth" id="Date_of_Birth" onblur="Date_of_Birth_valid();AutoAge();" required placeholder="01/01/2003" value=<?php if(!$num_of_rows==1){echo "";}else{echo "$dob";}
 ?>>
    <input type="text" class="adjustment_textfield" name="Age" id="Age" onblur="Age_valid();" required>
    <select name="Gender" id="Gender" class="adjustment_textfield" required>
        <option value="">--Select--</option>
        <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
</select>
<div class="container">
<label id="Date_of_Birth_label"></label>
<label id="Age_label"></label>
</div>
</div><br>


<div class="container">
    <br><label for="Applicant_Full_Name">Applicant Full Name</label>
    <label for="Parent_Number" style="margin-left:210px">Parent Number</label>
    <label for="Martial_Status" style="margin-left:230px">Martial Status</label>
</div>
<div class="container">
    <input type="text" name="Applicant_Full_Name" id="Applicant_Full_Name" onblur="Applicant_Full_Name_valid();"  required placeholder="first middle last" value=<?php if(!$num_of_rows==1){echo "";}else{echo "$nam1";}
 ?>>
    <input type="text" class="adjustment_textfield" name="Parent_Number" id="Parent_Number" required onblur="Parent_Number_valid();" value=<?php if(!$num_of_rows==1){echo "";}else{echo "$mobile";}
 ?>>
    <input type="radio" name="Married" id="Married" class="adjustment_textfield" >Married &nbsp;&nbsp; 
    <input type="radio" name="Married" id="Unmarried">Unmarried &nbsp;&nbsp;
    <input type="radio" name="Married" id="Divorcee">Divorcee </div>

    <div class="container">
<label id="Applicant_Full_Name_label"></label>
<label id="Parent_Number_label"></label>
</div>
    
    <br>
    <div class="container">
        <h3 id="personal_details">CATEGORY</h3>
    </div>
    <div class="container">
        <br>
        <select name="Religious_details" id="Religious_details" required>
            <option value="">--Select--</option>
            <option value="OPEN">OPEN</option>
             <option value="OBC">OBC</option>
             <option value="NT">NT</option>
              <option value="SC">SC</option>
                <option value="ST">ST</option>
        </select>
        
    </div>
    
    
    
    <div class="container"><br><br>
<h3 id="personal_details">Caste Details</h3>
</div>

<div class="container" ><br>
<div class="contianer">Upload Your Caste Certificate</div>
<div class="container"><br>
<input type="file" id="Caste_Details" name="caste_detail" class="form-control" >
</div>
</div>


<div class="container"><br><br>
<h3 id="personal_details">Income Details</h3>
</div>

<div class="container" ><br>
<div class="contianer" >Upload Your Income Certificate</div>
<div class="container"><br>
<input type="file" id="Income_Details" name="Income_Details" class="form-control" >
</div>
</div>

<div class="container"><br><br>
<h3 id="personal_details">Domicile Details</h3>
</div>

<div class="container"><br>
<div class="contianer">Upload Your Domicile Certificate</div>
<div class="container"><br>
<input type="file" id="Domicile_Details" name="Domicile_Details" class="form-control" >
</div>
</div>


<div class="container"><br><br>
<h3 id="personal_details">Personal Eligiblity Details</h3>
</div>


<div class="container">
    <br><label for="Salaried">Are you Salaried?</label>
    <label for="Disability" class="adjustment_label">Disability of any type?</label>
    
</div>
<div class="container">
    <select name="Salaried" id="Salaried" required>
        <option value="">--Select--</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    
    <select name="Disability" id="Disability" style="margin-left:235px" required>
        <option value="">--Select--</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
</select>

</div><br>
<div class="container"><br><br>
<h3 id="personal_details">Bank Account Details </h3>
</div>

<div id="container">
    <br>
    <div class="alert alert-danger alert-dismissible" role="alert">  <div>Note: Benefit will be disbursed in Aadhaar linked bank account so Aadhaar is required but if you have any difficulty linking your Aadhaar, please provide the bank details in below section.</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>


<div class="container"> 
    <label for="Bank_Account_No">Bank Account No</label>
    <label for="IFSC" style="margin-left:180px">IFSC</label>
</div>

<div class="container">
    
    <input type="text" required name="Bank_Account_No" id="Bank_Account_No" onblur="Bank_Account_No_valid();" value=<?php if(!$num_of_rows==1){echo "";}else{echo "$bank";}
 ?>>
    <input type="text" required name="IFSC" id="IFSC" style="margin-left: 110px" onblur="IFSC_valid();" value=<?php if(!$num_of_rows==1){echo "";}else{echo "$ifsc";}
 ?>>
</div>

<div class="container">
<label id="Bank_Account_No_label"></label>
<label id="IFSC_label"></label>
</div>
    
<div class="container">
<br>
<input type="submit" value="Submit" class="btn btn-success" style="margin-left:460px" name="submit_btn" id="btn">
<input type="reset" value="Reset" class="btn btn-danger" >
<input type="submit" value="UPDATE" class="btn btn-warning" name="update-btn" id="update-btn" >
</div>

</form>

<?php
if($num_of_rows == 1){
 echo "<script>document.getElementById('update-btn').hidden=false;
 document.getElementById('btn').hidden=true
 </script>";
}else{
    echo "<script>document.getElementById('btn').hidden=false;
    document.getElementById('update-btn').hidden=true</script>";
}
?>
<script>

function AutoAge(){
    
    // var str=document.getElementById("Date_of_Birth").value
    // str.split("/")
    //  var a=str[6]+str[7]+str[8]+str[9]
    // parseInt(a)
 
    // d=new Date()
   
    // document.getElementById("Age").value=(d.getFullYear()-a)

    var str = document.getElementById("Date_of_Birth").value;
    var b = str.split("/");
    var c = parseInt(b[2]); 
    var d = new Date();
    var year = d.getFullYear();
    document.getElementById("Age").value =(year - c);
        
}
</script>

</body>
</html>
