<!DOCTYPE html>
<html lang="en">
<?php require('connection.php');?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <script src="03_current_course.js"></script>
    <style>
        #current_cousre {
            color: #e8b038;
        }

        #mandatory_field {
            margin-left: 950px;
            color: red;
        }
        hr {
            height: 2px;
            background-color: #0ff5cb;
            border: none;
            margin-bottom: 20px;
        }
    </style>
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
$uname=$_GET["uname"];
echo $uname;
$query="SELECT * FROM `current_course` WHERE `user_name` LIKE '$uname' ";
$res=mysqli_query($conn,$query);
$num_of_rows = mysqli_num_rows($res);
if($num_of_rows==1){
 $arr=mysqli_fetch_array($res);
 $admision_year=$arr['admission_year'];
 $state=$arr['institute_state'];
 $district=$arr['institute_district'];
 $college_name=$arr['collge_name'];
 $course=$arr['course'];
 $qualify_level=$arr['qualification'];
 $stream=$arr['stream'];
 $admisiion_type=$arr['admission_type'];
 $marks=$arr['marks'];
 $cap_id1=$arr['cap_id'];
 $study_year=$arr['study_year'];
 $status=$arr['status'];
 $categoery=$arr['admission_category'];
 $gap_yearr=$arr['gap_year'];
 $mode=$arr['mode'];
 
}else{
    
}
?>


<body>
    <form action=<?php echo"current_course_db.php?uname=$uname"?> method="post" enctype="multipart/form-data">

        <div class="container">
            <h1 id="current_cousre">Current Course</h1>
            <span id="mandatory_field">All * marks fields are mandatory</span>
            <hr>
        </div>

        <br>
        <div class="alert alert-danger" role="alert" style="height: 150px; width: 1300px; margin-left: 100px; ">
            <ul>
                <li>Kindly fill the details of your current course in chronological order: Eg. First Year, Second Year,
                    Third Year etc..</li>
                <li>The current year of study of the course should have Pursuing status. Eg: You are studying in 3rd
                    year then please make 3 entries with First Year and Second Year with status as Completed and Third
                    year as Pursuing</li>
                <li> If your current course is second year pursuing then click on Delete Button, add first course year
                    details as completed and update the second year course details for the current pursuing year as
                    Pursuing and click on save.</li>
            </ul>
        </div>





        <br><br><br>



        <div class="container" style="  display: flex;  justify-content: space-around;">


            <div class="col-md-3">
                <label class="form-label">Admission Year In Current Course <span style="color: red;">*</span></label>
                <select type="text" class="form-control" id="validationCustom01" required
                    onchange="Admission_year_valid();" name="admissionyear">
                    <option value="">--Select--</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
                <label id="validationCustom01_label"></label>
            </div>


            <div class="col-md-2">
                <label class="form-label">Institute State<span style="color: red;">*</span></label>
                <select type="text" class="form-control" id="Institute_State" onchange="State_valid();" name="state">
                    <option value="">--Select--</option>
                    <option value="Delhi" >Delhi</option>
                    <option value="Rajasthan" >Rajasthan</option>
                    <option value="Uttar_Pradesh" >Uttar Pradesh</option>
                    <option value="Madhya_Pradesh" >Madhya Pradesh</option>
                </select>
                <label id="validationCustom02_label"></label>
            </div>

            <div class="col-md-2">
                <label class="form-label">Institute District<span style="color: red;">*</span></label>
                <select type="text" class="form-control" id="Institute_District" onchange="District_valid()" name="Institute_District">
                    <option value="">--Select--</option>

                </select>
                <label id="validationCustom03_label"></label>
            </div>

        </div>

        <br><br><br>



        <div class="container" style=" display: flex;  justify-content:space-evenly">

            <div class="col-md-8">
                <label class="form-label">College Name<span style="color: red;">*</span></label>
                <select type="text" class="form-control" id="College_name" required name="College_name">
                    <option value="">--Select--</option>

                </select>
            </div>



        </div>


        <br><br><br>

        <div class="container" style=" display: flex;  justify-content: space-around;">


            <div class="col-md-2">
            <label for="Course"class="form-label"   >Course</label>
                    <select name="Course"   id="Course"class="form-control">
                        <option value="..Select..">..Select..</option>
                        <script>
                            var arr=["POST SSC Diploma in COMPUTER ENGINEERING","POST SSC Diploma in ARTIFICIAL INTELLIGENCE","POST SSC Diploma in ELECTRICAL ENGINEERING","POST SSC Diploma in ELECTRONINCS ENGINEERING","POST SSC Diploma in MECHANICAL ENGINEERING","POST SSC in CIVIL ENGINEERING"]
                            for(i=0;i<5;i++){
                                var opt=document.createElement("option")
                                opt.textContent=arr[i]
                                opt.value=arr[i]
                                document.getElementById("Course").appendChild(opt);
                            }
                            </script>
                    </select>

            </div>


            <div class="col-md-3">
            <label for="Qualification_Level"  class="form-label">Qualification Level</label>
                    <select name="Qualification_Level" class="form-control" id="Qualification_Level" onchange=" qualfication_level();">
                        <option value="..Select..">..Select..</option>
                        <option value="HSC">HSC (12th)</option>
                        <option value="SSC">SSC (10th)</option>
                    </select>

            </div>




            <div class="col-md-3">
            <label for="s1"   class="form-label"  >Stream</label>
                    <select name="s1" class="form-control" id="s1">
                        <option value="..Select..">..Select..</option>
                        <option value="Art">Arts</option>
                        <option value="Commerce">Commerce</option>
                        <option value="Science">Science</option>
                    </select>
            </div>
        </div>
        <br><br><br>


        <div class="container" style="   display: flex;  justify-content: space-around;">

            <div class="col-md-3">
                <label class="form-label">Addmission Type<span style="color: red;">*</span></label>
                <select type="text" class="form-control" id="validationCustom09" required name="admission_type">
                    <option value="">--Select--</option>
                    <option value="CAP">CAP</option>
                    <option value="NON-CAP">NON-CAP</option>
                </select>
            </div>




            <div class="col-md-2">
                <label class="form-label">CET / Merit Percentage / CLAT Score<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="validationCustom10" required onchange="Percentage_valid();" name="percentage" >
                <label id="validationCustom10_label" ></label>
            </div>




            <div class="col-md-2">
                <label class="form-label">Application Admission ID/CAP ID/CLAT Admit Card No<span
                        style="color: red;">*</span></label>
                <input type="text" class="form-control" id="validationCustom11" name="cap_id" required onblur="CAP_ID()" >
                <label id="cap_label"></label>
            </div>


        </div>

        <br><br><br>

        <div class="container" style="  display: flex;  justify-content: space-around;">


            <div class="col-md-3">
                <label class="form-label">Year Of Study <span style="color: red;">*</span></label>
                <select type="text" class="form-control" id="validationCustom13" required
                    onchange="Year_of_study_valid();" name="year_study">
                    <option value="">--Select--</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
                <label id="validationCustom13_label"></label>
            </div>



            <div class="col-md-2">
                <label class="form-label">Completed Or Continue <span style="color: red;">*</span></label>
                <select type="text" class="form-control" id="validationCustom14" required name="status" onchange="marksheet();">
                    <option value="">--Select--</option>
                    <option value="Completed" >Completed</option>
                    <option value="Pursing">Pursing</option>
                </select>
                <label id="validationCustom14_label"></label>
              
            </div>




            <div class="col-md-2" hidden id="marksheet">
                    <label for="Upload_Marksheet" class="form-label">Last Semester Marksheet</label>
                    <input type="file" name="Upload_Marksheet" id="Upload_Marksheet" class="form-control">
            </div>

        </div>

        <br><br><br>



        <div class="container" style="   display: flex;  justify-content: space-around;">
            <div class="col-md-3">
                <label class="form-label">Is Admission Through Open Or Reserved Category ?<span
                        style="color: red;">*</span></label>
                <select type="text" class="form-control" id="validationCustom16" required name="cateogery"
                    onchange="Cateoegery_valid();">
                    <option value="">--Select--</option>
                    <option value="General">General</option>
                    <option value="OBC">OBC</option>
                    <option value="Other">Other</option>
                </select>
                <label id="validationCustom16_label"></label>
            </div>




            <div class="col-md-2">
                <label class="form-label">Gap Years<span style="color: red;">*</span></label>
                <input type="text" class="form-control"  id="validationCustom17" name="gap_year" required > 
            </div>


            <div class="col-md-2">
                <label class="form-label">Mode <span style="color: red;">*</span></label>
                <select type="text" class="form-control" id="Mode" required onchange="Mode_valid();" name="Mode">
                    <option value="">--Select--</option>
                    <option value="Regular">Regular</option>
                    <option value="Distance/Correspondence">Distance / Correspondence</option>
                </select>
                <label id="Mode_label"></label>
            </div>
        </div>
        <br><br><br>
        <div class="container " style="  display: flex;">
        <input type="submit" value="SAVE" class="btn btn-outline-success" style="margin-right:10px;" id="btn" name="submit_btn">    
            <button class="btn btn-outline-danger" type="button">Reset</button>
            <button class="btn btn-outline-danger" type="submit" name="update-btn" id="update-btn">Update</button>
        </div>
        <br><br><br>
    </form>
    <script>
var states = {
            Delhi: ["South Delhi", "North Delhi", "Central Delhi", "New Delhi"],
            Rajasthan: ["Ajmer", "Kota", "Jaipur", "Jaisalmer"],
            Uttar_Pradesh: ["Agra", "Aligarh", "Ayodhya", "Ghaziabad"],
            Madhya_Pradesh: ["Bhopal", "Jabalpur", "Ujjain", "Dewas"]
        };


        var cities = {
            "South Delhi": ["Ambience Public School", "Amity International School", "Birla Vidya Niketan", "Gyan Bharati School"],
            "North Delhi": ["Royal Children Academy", "Boost Up Play School", "Tsn The School", "Competition Plus Sansthan"],
            "Central Delhi": ["Olive The Public School", "Indus Valley Public School", "Brains Academy", "Sanfort Play School"],
            "New Delhi": ["Green Valley Public School", "Wisdom Public Higher Secondary School", "Learning Einstein School", "ROYAL EDTECH SCHOOL"],
            Ajmer: ["Government Polytechnic College, Ajmer", "Government Women's Polytechnic College, Ajmer", "Swami Keshwanand Shikshan Sansthan Polytechnic College, Ajmer", "Aryabhatta College of Engineering & Technology, Ajmer"],
            Kota: ["Government Polytechnic College, Kota", "Kota Polytechnic College", "Swami Keshwanand Shikshan Sansthan, Polytechnic College", "Maa Sharda Educational Institute, Polytechnic College"],
            Jaipur: ["Jaipur National University, Jaipur","Suresh Gyan Vihar University, Jaipur","NIMS University, Jaipur","Jagannath University, Jaipur"],
            Jaisalmer: ["Government Polytechnic College, Jaisalmer", "Ecb Polytechnic College", "Mahila Polytechnic College", "Manda Institute Of Technology"],
            Agra: ["ACE College of Engineering and Management, Agra","Anand Polytechnic College, Agra","Bhaavya Technical Institute, Agra","Central Footwear Training Institute, Agra"],
            Aligarh: ["Mangalayatan University , Aligarh","Vision Institute of Technology, Aligarh","Institute of Technology & Management, Aligarh","Aligarh Muslim University, Aligarh"],
            Ayodhya: ["Amardeep College of Engineering and Management, Ayodhya","Nandini Nagar Technical Campus, Gonda","Government Girls Polytechnic Ayodhya, Ayodhya","Government Polytechnic, Ayodhya"],
            Ghaziabad: ["IAMR Group of Institutions, Ghaziabad","Bhagwati Institute of Technology and Science, Ghaziabad","Sunder Deep Group of Institutions - [SDGI], Ghaziabad","Sanskar Educational Group, Ghaziabad"],
            Bhopal: ["RKDF University, Bhopal", "Rabindranath Tagore University, Bhopal","LNCT University, Bhopal","Trinity Institute of Technology and Research,Bhopal"],
            Jabalpur: ["Lakshmi Narain College of Technology, Jabalpur", "Gyan Ganga College of Technology, Jabalpur", "Gyan Ganga College of Technology, Jabalpur", "Takshshila Institute of Engineering and Technology, Jabalpur"],
            Ujjain: ["Alpine Institute of Technology, Ujjain","Ujjain Polytechnic College, Ujjain","Vikram University, Ujjain","Government Polytechnic College, Ujjain"],
            Dewas: ["Saheed Jageshwar Nagar Government Polytechnic College, Dewas", "AITR Indore - Acropolis Institute of Technology and Research, Indore","Advanced Plastics Product Simulation and Evaluation Centre, Tamot","ACTS Satna - Aditya College of Technology and Science, Satna"]
        };

        var countrySelect = document.getElementById("Institute_State");
        var stateSelect = document.getElementById("Institute_District");
        var citySelect = document.getElementById("College_name");

        function State_valid() {
            stateSelect.innerHTML = ' <option value="">--Select--</option>';
            var selectedCountry = countrySelect.value;
            if (selectedCountry) {
                var selectedState = states[selectedCountry];
                selectedState.forEach(function (state) {
                    var opt = document.createElement("option");
                    opt.value = state;
                    opt.text = state;
                    stateSelect.appendChild(opt);
                });
            }
        }

        function District_valid() {
            citySelect.innerHTML = ' <option value="">--Select--</option>';
            var selectedState = stateSelect.value;
            if (selectedState) {
                var selectedCities = cities[selectedState];
                selectedCities.forEach(function (city) {
                    var opt = document.createElement("option");
                    opt.value = city;
                    opt.text = city;
                    citySelect.appendChild(opt);
                });
            }
        }
        function qualfication_level(){
             var qualfication_level=document.getElementById("Qualification_Level");
        var Stream1=document.getElementById("Stream");
            if(qualfication_level.options.selectedIndex==2){
                Stream1.disabled=true;
            }else{
                Stream1.disabled=false;
            }
        }

        function CAP_ID()
        {
            regx=/^[A-Z]{3}[0-9]{7}$/g
        if(!(regx.test( document.getElementById("validationCustom11").value))) 
        {
        document.getElementById("cap_label").innerHTML = "Invaid CAP ID number";
        document.getElementById("cap_label").style.color = "red";
        btn.disabled=true;
    } else {
        document.getElementById("cap_label").innerHTML = "";
        btn.disabled=false;
    }
        }

        function marksheet(){
            var a=document.getElementById("validationCustom14");
            if(a.options.selectedIndex==1){
                document.getElementById("marksheet").hidden=false;   
            }
            else{
                document.getElementById("marksheet").hidden=true;  
            }
        }
    </script>
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

</body>
</html