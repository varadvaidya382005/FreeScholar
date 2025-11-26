<!DOCTYPE html>
<html lang="en">

<head>
<?php require('connection.php');?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <script src="past_qualifications.js"></script> -->
    <title>Document</title>

    <style>
       
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #e8b038;
            text-align: center;
            margin-bottom: 20px;
        }

        .page-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #update_heading {
            color: #e8b038;
            text-align: center;
        }

        hr {
            height: 2px;
            background-color: #0ff5cb;
            border: none;
            margin-bottom: 20px;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
            padding: 15px;
            border-radius: 5px;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        select,
        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ffca28;
        }
    </style>


</head>

<body>
    <div class="container">
        <h1 id="update_heading">Update Profile</h1>
        <hr>


        <div class="alert alert-danger alert-dismissible" role="alert">
            <div>SSC Details are Mandatory.Ignore if you already filled.</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><br>

        <?php
    
     $uname = $_GET["uname"];    
        session_start();
            if($_SESSION['loggedin'] && $_SESSION['loggedin']==true){
    
             echo "<h1> Wel]come   ".$_SESSION['username']."</h1>";
        }else{
        header("location:/capstoneProject/Login_Pages/03_03_login_form_applicant.html");
        }
        // echo $uname;
        ?>
<?php
require 'connection.php';

$qualification = $Stream = $completed = $institute_state = $institute_region = $school_name = $Board_University = $Course = $Mode = $Admission_Year = $Passing_Year = $Result = $Percentage = $Attempts = $Upload_Marksheet = '';

$uname = isset($_GET["uname"]) ? $_GET["uname"] : null;
// var_dump($uname);
if ($uname !== null) {
    $query = "SELECT * FROM `past_qualification` WHERE `user_name` LIKE '$uname' ";
    $res = mysqli_query($conn, $query);
    $num_of_rows = mysqli_num_rows($res);
    // var_dump($uname);

    if ($num_of_rows == 1) {
        $arr = mysqli_fetch_array($res);
        $qualification = $arr['qualification'];
        $Stream = $arr['stream'];
        $completed = $arr['completed'];
        $institute_state = $arr['institute_state'];
        $institute_region = $arr['institute_region'];
        $school_name = $arr['school_name'];
        $Board_University = $arr['board_university'];
        $Course = $arr['course'];
        $Mode = $arr['mode'];
        $Admission_Year = $arr['admission_year'];
        $Passing_Year = $arr['passing_year'];
        $Result = $arr['result'];
        $Percentage = $arr['percentage'];
        $Attempts = $arr['attempts'];
        $Upload_Marksheet = $arr['marksheet'];
    }
}

?>


        <form action=<?php echo "past_qualification_db.php?uname=$uname";?> method="post" enctype="multipart/form-data">


            <div class="container" style="display:flex;justify-content:space-around;">
                <div class="col-md-3">
                    <label for="Qualification_Level" class="form-label">Qualification Level</label>
                    <select name="Qualification_Level" class="form-control" id="Qualification_Level"
                        onchange=" qualfication_level();">
                        <option value="..Select..">..Select..</option>
                        <option value="HSC" <?php if($qualification=="HSC" ) echo "selected" ; ?>>HSC (12th)</option>
                        <option value="SSC" <?php if($qualification=="SSC" ) echo "selected" ; ?>>SSC (10th)</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="Stream" class="form-label">Stream</label>
                    <select name="Stream" class="form-control" id="Stream">
                        <option value="..Select..">..Select..</option>
                        <option value="Art" <?php if($Stream=="Art" ) echo "selected" ; ?>>Arts</option>
                        <option value="Commerce" <?php if($Stream=="Commerce" ) echo "selected" ; ?>>Commerce</option>
                        <option value="Science" <?php if($Stream=="Science" ) echo "selected" ; ?>>Science</option>
                    </select>

                </div>
                <div class="col-md-2">
                    <label for="Completed" class="form-label">Completed</label>
                    <select name="Completed" class="form-control" id="Completed">
                        <option value="..Select..">..Select..</option>
                        <option value="Passed" <?php if($completed=="Passes" ) echo "selected" ; ?>>Passed</option>
                    </select>

                </div>
            </div>
            <br><br><br>


            <div class="container" style="display:flex;justify-content:space-around;">
        <div class="col-md-3">
            <label for="Institute_State" class="form-label">Institute State</label>
            <select name="Institute_State" class="form-control" id="Institute_State" onchange="updateCityInfo();">
                <option value="..Select..">..Select..</option>
                <option value="Delhi ">Delhi</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
            </select>
        </div>

        <div class="col-md-2">
            <label for="instituteDistrict" class="form-label">Institute Region</label>
            <select name="instituteDistrict" class="form-control" onchange="updateRegion();" id="Institute_District">
                <option value="..Select..">..Select..</option>
            </select>
        </div>

        <div class="col-md-2">
            <label for="schoolname" class="form-label">School Name</label>
            <select id="school_name" name="schoolname" class="form-control">
                <option value="..Select..">..Select..</option>
            </select>
        </div>
    </div>
            <br><br><br>
           

            <div class="container" style="display:flex;justify-content:space-around;">
                <div class="col-md-3">

                    <label for="Board_University" class="form-label">Board/University</label>
                    <select name="Board_University" id="Board_University" class="form-control">
                        <option value="..Select..">..Select..</option>
                        <option value="AUTONOMOUS" <?php if($Board_University=="AUTONOMOUS" ) echo "selected" ; ?>
                            >AUTONOMOUS</option>
                        <option value="DSEU" <?php if($Board_University=="DSEU" ) echo "selected" ; ?>>DSEU</option>
                        <option value="JNU" <?php if($Board_University=="JNU" ) echo "selected" ; ?>>JNU</option>
                        <option value="GLA" <?php if($Board_University=="GLA" ) echo "selected" ; ?>>GLA</option>
                        <option value="MPBU" <?php if($Board_University=="MPBU" ) echo "selected" ; ?>>MPBU</option>

                    </select>
                </div>
                <div class="col-md-2">
                    <label for="Course" class="form-label">Course</label>
                    <select name="Course" id="Course" class="form-control">
                        <option value="..Select..">..Select..</option>
                        <option value="POST SSC Diploma in COMPUTER ENGINEERING" <?php
                            if($Course=="POST SSC Diploma in COMPUTER ENGINEERING" ) echo "selected" ; ?>>POST SSC
                            Diploma in COMPUTER ENGINEERING</option>
                        <option value="POST SSC Diploma in ARTIFICIAL INTELLIGENCE" <?php
                            if($Course=="POST SSC Diploma in ARTIFICIAL INTELLIGENCE" ) echo "selected" ; ?>>POST SSC
                            Diploma in ARTIFICIAL INTELLIGENCE</option>
                        <option value="POST SSC Diploma in ELECTRICAL ENGINEERING" <?php
                            if($Course=="POST SSC Diploma in ELECTRICAL ENGINEERING" ) echo "selected" ; ?>>POST SSC
                            Diploma in ELECTRICAL ENGINEERING</option>
                        <option value="POST SSC Diploma in ELECTRONINCS ENGINEERING" <?php
                            if($Course=="POST SSC Diploma in ELECTRONINCS ENGINEERING" ) echo "selected" ; ?>>POST SSC
                            Diploma in ELECTRONINCS ENGINEERING</option>
                        <option value="POST SSC Diploma in MECHANICAL ENGINEERING" <?php
                            if($Course=="POST SSC Diploma in MECHANICAL ENGINEERING" ) echo "selected" ; ?>>POST SSC
                            Diploma in MECHANICAL ENGINEERING</option>
                        <option value="POST SSC in CIVIL ENGINEERING" <?php if($Course=="POST SSC in CIVIL ENGINEERING"
                            ) echo "selected" ; ?>>POST SSC in CIVIL ENGINEERING</option>

                    </select>

                </div>
                <div class="col-md-2">
                    <label for="Mode" class="form-label">Mode</label>
                    <select name="Mode" id="Mode" class="form-control">
                        <option value="..Select..">..Select..</option>
                        <option value="Regular" <?php if($Mode=="Regular" ) echo "selected" ; ?>>Regular</option>
                        <option value="Distance/Correspondece" <?php if($Mode=="Distance/Correspondece" )
                            echo "selected" ; ?>>Distance/Correspondece</option>

                    </select>
                </div>
            </div>
            <br><br><br>
            <div class="container" style="display:flex;justify-content:space-around;">
                <div class="col-md-3">
                    <label for="Admission_Year" class="form-label">Admission Year</label>
                    <input type="text" name="Admission_Year" id="Admission_Year" class="form-control"
                        value="<?php echo $Admission_Year; ?>">
                </div>
                <div class="col-md-2">
                    <label for="Passing_Year" class="form-label">Passing Year</label>
                    <input type="text" name="Passing_Year" id="Passing_Year" class="form-control"
                        value="<?php echo $Passing_Year; ?>">
                </div>
                <div class="col-md-2">
                    <label for="Result" class="form-label">Result</label>
                    <select name="Result" id="Result" class="form-control">
                        <option value="..Select..">..Select..</option>
                        <option value="Passed" <?php if($Result=="Passed" ) echo "selected" ; ?>>Passed</option>
                    </select>
                </div>
            </div>
            <br><br><br>


            <div class="container" style="display:flex;justify-content:space-around;">
                <div class="col-md-3">
                    <label for="Percentage" class="form-label">Percentage</label>
                    <input type="text" name="Percentage" id="Percentage" class="form-control"
                        value="<?php echo $Percentage; ?>">
                </div>
                <div class="col-md-2">
                    <label for="Attempts" class="form-label">Attempts</label>
                    <input type="text" name="Attempts" id="Attempts" class="form-control"
                        value="<?php echo $Attempts; ?>">
                </div>
                <div class="col-md-2">
                    <label for="Upload_Marksheet" class="form-label">Upload Marksheet</label>
                    <input type="file" name="Upload_Marksheet" id="Upload_Marksheet" class="form-control">
                </div>
            </div>
            <br><br><br>
            <div class="container">
                <center><input type="submit" value="UPADTE" class="btn btn-outline-warning" name="update_btn" id="update_btn"></center>
                <br>
                <center><input type="submit" value="NEXT" class="btn btn-outline-success" name="submit_btn" id="submit_btn"></center>

            </div>
        </form>
        <br><br><br>
        <script>
             var states = {
    "Delhi": ["South Delhi", "North Delhi", "Central Delhi", "New Delhi"],
    "Rajasthan": ["Ajmer", "Kota", "Jaipur", "Jaisalmer"],
    "Uttar Pradesh": ["Agra", "Aligarh", "Ayodhya", "Ghaziabad"],
    "Madhya Pradesh": ["Bhopal", "Jabalpur", "Ujjain", "Dewas"]
};

var cities = {
    "South Delhi": ["Ambience Public School", "Amity International School", "Birla Vidya Niketan", "Gyan Bharati School"],
    "North Delhi": ["Royal Children Academy", "Boost Up Play School", "Tsn The School", "Competition Plus Sansthan"],
    "Central Delhi": ["Olive The Public School", "Indus Valley Public School", "Brains Academy", "Sanfort Play School"],
    "New Delhi": ["Green Valley Public School", "Wisdom Public Higher Secondary School", "Learning Einstein School", "ROYAL EDTECH SCHOOL"],
    "Ajmer": ["Brilliant Gems School., Ajmer", "Boost Up Play School, Ajmer", "Competition Plus Sansthan., Ajmer", "Rashtriya Military School., Ajmer"],
    "Kota": ["Kautilya Senior Secondary School, Kota", "Nalanda Academy", "Dev Public Senior Secondary School", "Lbs Senior Secondary School"],
    "Jaipur": ["Maharani Gayatri Devi Public School", "Maharaja Sawai Man Singh Vidyalaya", "Neerja Modi School", "Delhi police school"],
    "Jaisalmer": ["Rajkumari Ratnavati Girls School", "Desert Public School Pokaran", "Kendriya Vidyalaya", "Jai Hind Upper Primary School"],
    "Agra": ["Green Valley Public School", "Wisdom Public Higher Secondary School", "Shri Balaji Public School Mulberry Heights", "Christ Church Boy's Senior Secondary School"],
    "Aligarh": ["Amazing Kids Academy", "Akshat International School.", "Podar International School", "Nirmala Convent School"],
    "Ayodhya": ["The Ivy Global School", "The Iconic School", "St. Joseph International School For Excellence", "International Public School"],
    "Ghaziabad": ["Ramakrishna Mission School (CBSE) Gwalior", "Rishikul Vidya Niketan Junior Branch", "Holy Child Public School", "Mount Litera Zee School"],
    "Bhopal": ["Seth M R Jaipuria School, Lucknow",
        "Seth Anandram Jaipuria School, Lucknow", "The Millennium School, Lucknow", "Study Hall Educational Foundation, Lucknow"],
    "Jabalpur": ["Gaurav Memorial International School", "Mother Teresa Mission Higher Secondary School", "Escorts World School", "Makoons Pre School"],
    "Ujjain": ["Stanford International School", "Sanskar Public School", "St. Mary's School", "Ram Lalit Singh Mahavidyalaya"],
    "Dewas": ["Crimson World School", "Sunbeam Group Of Educational Institutions", "Happy Home English School", "Oxford Public School"]
};

            var countrySelect = document.getElementById("Institute_State");
        var stateSelect = document.getElementById("Institute_District");
        var citySelect = document.getElementById("school_name");
        var board = document.getElementById("Board_University");

        function updateCityInfo() {
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

        function updateRegion() {
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
            function qualfication_level() {
                var qualfication_level = document.getElementById("Qualification_Level");
                var Stream1 = document.getElementById("Stream");
                if (qualfication_level.options.selectedIndex == 2) {
                    Stream1.disabled = true;
                } else {
                    Stream1.disabled = false;
                }
            }



        </script>
        <?php
if($num_of_rows == 1){
 echo "<script>document.getElementById('update_btn').hidden=false;
 document.getElementById('submit_btn').hidden=true
 </script>";
}else{
    echo "<script>document.getElementById('submit_btn').hidden=false;
    document.getElementById('update_btn').hidden=true</script>";
}
?>
</body>

</html>