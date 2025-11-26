<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
  
  require("connection.php");
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <script src="02_address_info.js"></script>
</head>

<style>
    #address_info {
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

<body>
<?php 


$uname=$_GET["uname"];
session_start();
if($_SESSION['loggedin'] && $_SESSION['loggedin']==true){
    
    echo "<h1> Welocome   ".$_SESSION['username']."</h1>";
}else{
header("location:/capstoneProject/Login_Pages/03_03_login_form_applicant.html");
}

?>
    
<?php
$uname=$_GET["uname"];
    $res = "SELECT * FROM `address_info` WHERE `user_name` LIKE '$uname'";
    $res = mysqli_query($conn, $res);
    $num_of_rows = mysqli_num_rows($res);
    if($num_of_rows == 1){
        $arr = mysqli_fetch_array($res);
        $address = $arr['address'];
        $state = $arr['state'];
        $district = $arr['district'];
        $taluka = $arr['taluka'];
        $village = $arr['village'];
        $pincode = $arr['pincode'];
       
    } else {
        $address = '';
        $state = '';
        $district = '';
        $taluka = '';
        $village = '';
        $pincode = '';
        
    }

    ?>

    <form action=<?php echo "address_info_db.php?uname=$uname";?> method="post">

        <div class="container">
            <h1 id="address_info">Permanent Address Details</h1>
            <span id="mandatory_field">All * marks fields are mandatory</span>
            <hr>
        </div>
        <br><br><br>


        <div class="container" style="  display: flex;  justify-content: space-around;">


            <div class="col-md-3">
                <label class="form-label">Address<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="validationCustom01" name="validationCustom01" required
                    style="height: 50px; width: 350px;" value="<?php echo $address; ?>">
            </div>


            <div class="col-md-2">
                <label class="form-label">State<span style="color: red;">*</span></label>
                <select type="text" class="form-control" id="Institute_State" name="Institute_State" required onchange="State_valid();empty_state();">
                    <option value="">--Select--</option>
                    <option value="Maharashtra" <?php if($state == "Maharashtra") echo "selected"; ?>>Maharashtra</option>
                    <option value="Rajasthan" <?php if($state == "Rajasthan") echo "selected"; ?>>Rajasthan</option>
                    <option value="Uttar_Pradesh" <?php if($state == "Uttar_Pradesh") echo "selected"; ?>>Uttar Pradesh</option>
                    <option value="Madhya_Pradesh" <?php if($state == "Madhya_Pradesh") echo "selected"; ?>>Madhya Pradesh</option>
                </select>
                <label id="validationCustom02_label"></label>
            </div>

            <div class="col-md-2">
                <label class="form-label">District<span style="color: red;">*</span></label>
                <select type="text" class="form-control" id="Institute_District" name="Institute_District" required onchange="District_valid();empty_district();">
                    <option value="">--Select--</option>
                  </select>
                <label id="validationCustom03_label"></label>
            </div>

        </div>
        <br><br><br>




        <div class="container" style=" display: flex;  justify-content: space-around;">
            <div class="col-md-3">
                <label class="form-label">Taluka</label>
                <select type="text" class="form-control" id="Taluka"name="Taluka" required onchange="Taluka_valid();empty_taluka();">
                    <option value="">--Select--</option>
                   
                </select>
                <label id="validationCustom04_label"></label>
            </div>



            <div class="col-md-2">
                <label class="form-label">Village</label>
                <input type="text" class="form-control" id="validationCustom05" name="validationCustom05"required onblur="Village_valid();" value="<?php echo $village; ?>">
                <label id="validationCustom05_label"></label>
            </div>


            <div class="col-md-2">

                <label class="form-label">Pincode<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="validationCustom06" name="validationCustom06" required onblur="Pincode_validate();" value="<?php echo $pincode; ?>">
                <label id="validationCustom06_label"></label>
            </div>


        </div>

        <br><br><br>

        <div class="container" id="radio-select">
            <span style="margin-left: 50px;"><small><b>Is Correspondence Address same as Permanent?</b></small></span>
            <br>
            <input type="radio" name="address" id="add1" style="margin-left: 50px; " onclick="correspondence_add();">
            <label for=""><b>Yes</b></label>
            <input type="radio" name="address" id="add2" style="margin-left: 50px;" onclick="correspondence_add();">
            <label for=""><b>No</b></label>

        </div>
        
        <div class="container" style="display: flex; justify-content: center;">
            <input type="submit" value="SAVE" class="btn btn-outline-success" style="margin-right:10px;" id="btn" name="submit_btn">    
            <button class="btn btn-outline-danger" type="button">Reset</button>
            <button class="btn btn-outline-danger" type="submit" name="update-btn" id="update-btn">Update</button>
        </div>
        <br><br><br>

    </form>

<script>

var states = {
    Maharashtra: ["Thane", "Washim", "Chandrapur", "Dhule"],
    Rajasthan: ["Ajmer", "Kota", "Jaipur", "Jaisalmer"],
    Uttar_Pradesh: ["Jabalpur", "Ujjain", "Bhopal", "Gwalior"],
    Madhya_Pradesh: ["Lucknow", "Kanpur", "Mirzapur", "Varanasai"]
};


var cities = {
    "Thane": ["Ambarnath", "Bhiwandi", "Dahanu", "Jawhar"],
    "Washim": ["Adoli", "Anjankhed", "Babhulgaon", "Asola"],
    "Chandrapur": ["Bhadravati", "Warora", "Nagbhid", "Bramhapuri"],
    "Dhule": ["Aklad", "Anchade Tanda", "Bamburle.pr.ner.", "Balapur"],
    Ajmer: ["Kishangarh", "Masuda", "Beawar", "Kekri"],
    Kota: ["Pipalda", "Sangod", "Ramganj Mandi", "Ladpura"],
    Jabalpur: ["Amahinota", "Atha Kheda", "Badhaiya Kheda", "Bahoripar"],
    Jaipur: ["Amber","Bassi","Chomu","Jamwa Ramgarh"],
    Jaisalmer: ["Alam Ka Gaon", "Amb Nagar", "Arjana", "Arjansar"],
    Ujjain: ["Badnagar","Ghatiya","Khacharod","Mahidpur"],
    Bhopal: ["Huzur","Berasia","Kolar"],
    Gwalior:  ["Agrabhatpura","Ajaypur","Alinagar","Amargarh"],
    Lucknow: ["Alinagar","Alinagar Khurd","Allupur","Ashraf Nagar"],
    Kanpur: ["Bausar","Bhailamau","Gadhewa Majhawan","Jhakhara"],
    Mirzapur:  ["Sadar","Lalganj","Marihaan","Chunar"],
    Varanasai:  ["Atarsuiya","Bakhani","Barsata","Dharadhar"]
};

var countrySelect = document.getElementById("Institute_State");
var stateSelect = document.getElementById("Institute_District");
var citySelect = document.getElementById("Taluka");


function State_valid() {
    stateSelect.innerHTML = '<option value="">--Select--</option>';
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
    citySelect.innerHTML = '<option value="">--Select--</option>';
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


// correspondence address

var countrySelect1 = document.getElementById("correspondence_Institute_State");
var stateSelect1 = document.getElementById("correspondence_district");
var citySelect1 = document.getElementById("correspondence_taluka");

function correspondence_State_valid() {
    stateSelect1.innerHTML = '<option value="">--Select--</option>';
    var selectedCountry = countrySelect1.value;
    if (selectedCountry) {
        var selectedState = states[selectedCountry];
        selectedState.forEach(function (state) {
            var opt = document.createElement("option");
            opt.value = state;
            opt.text = state;
            stateSelect1.appendChild(opt);
        });
    }
}

function correspondence_district_valid() {
    citySelect1.innerHTML = '<option value="">--Select--</option>';
    var selectedState = stateSelect1.value;
    if (selectedState) {
        var selectedCities = cities[selectedState];
        selectedCities.forEach(function (city) {
            var opt = document.createElement("option");
            opt.value = city;
            opt.text = city;
            citySelect1.appendChild(opt);
        });
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

</html>
