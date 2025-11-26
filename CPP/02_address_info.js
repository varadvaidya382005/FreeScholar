let regx;
let val;

function Pincode_validate() {
    val = document.getElementById("validationCustom06").value;
    regx = /^\d{6}$/;
    

    if (!regx.test(val)) {
        document.getElementById("validationCustom06_label").innerHTML = "Invalid pin code";
        document.getElementById("validationCustom06_label").style.color = "red";
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("validationCustom06_label").innerHTML = "";
    
        document.getElementById("btn").disabled=false;
    }
}

function Village_valid() {
    val = document.getElementById("validationCustom05").value;
    regx = /^([A-z]){1,}$/g;
    if (!regx.test(val)) {
        document.getElementById("validationCustom05_label").innerHTML = "Please Enter the proper village name";
        document.getElementById("validationCustom05_label").style.color = "red";
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("validationCustom05_label").innerHTML = "";
        document.getElementById("btn").disabled=false;
    }
}


function empty_state() {
    if (document.getElementById("Institute_State").options.selectedIndex == 0
    ) {
        alert("Please select proper field")
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("validationCustom02_label").innerHTML = "";
        document.getElementById("btn").disabled=false;
    }
}

function empty_district() {
    if (document.getElementById("Institute_District").options.selectedIndex == 0) {
        alert("Please select proper field")
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("validationCustom03_label").innerHTML = "";
        document.getElementById("btn").disabled=false;
    }
}
function empty_taluka() {
    if (document.getElementById("Taluka").options.selectedIndex == 0) {
        alert("Please select proper field")
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("validationCustom04_label").innerHTML = "";
        document.getElementById("btn").disabled=false;    }
}

function correspondence_add(){
    if(document.getElementById("add1").checked){
        var d1=document.getElementById("d1");
        d1.remove();

    }else if(document.getElementById("add2").checked){


        var rs=document.getElementById("radio-select");
        let html=`
        <div id="d1">
        <span style="color:rgb(61, 135, 231); font-size: 25px; margin-left: 150px;">Correspondence Address Details
   </span>
     <br><br><br>
 
     <div class="container" style="  display: flex;  justify-content: space-around;">
 
         <div class="col-md-3">
             <label class="form-label">Address<span style="color: red;">*</span></label>
             <input type="text" class="form-control" id="validationCustom01" required
                 style="height: 50px; width: 350px;">
         </div>
 
 
         <div class="col-md-2">
             <label class="form-label">State<span style="color: red;">*</span></label>
             <select type="text" class="form-control" id="correspondence_Institute_State" required onchange="correspondence_State_valid();">
             <option value="">--Select--</option>
                 <option value="Maharashtra">Maharashtra</option>
                 <option value="Rajasthan">Rajasthan</option>
                 <option value="Uttar_Pradesh">Uttar Pradesh</option>
                 <option value="Madhya_Pradesh">Madhya Pradesh</option>
             </select>
             <label id="correspondence_state_label"></label>
         </div>
 
         <div class="col-md-2">
             <label class="form-label">District<span style="color: red;">*</span></label>
             <select type="text" class="form-control" id="correspondence_district" required onchange="correspondence_district_valid();">
                 <option value="">--Select--</option>
                             </select>
             <label id="correspondence_district_label"></label>
         </div>
 
     </div>
     <br><br><br>
 
 
 
 
     <div class="container" style=" display: flex;  justify-content: space-around;">
         <div class="col-md-3">
             <label class="form-label">Taluka</label>
             <select type="text" class="form-control" id="correspondence_taluka" required >
                 <option value="">--Select--</option>
              
             </select>
             <label id="correspondence_taluka_label"></label>
         </div>
 
 
 
         <div class="col-md-2">
             <label class="form-label">Village</label>
             <input type="text" class="form-control" id="correspondence_village" name="correspondence_village" required onblur="correspondence_village_valid();"> 
             <label id="correspondence_village_label"></label>
         </div>
 
 
         <div class="col-md-2">
 
             <label class="form-label">Pincode<span style="color: red;">*</span></label>
             <input type="text" class="form-control" id="correspondence_pincode"name="correspondence_pincode" required onblur="correspondence_pincode_valid();">
             <label id="correspondence_pincode_label"></label>
         </div>
     </div>
     </div>

 `
rs.insertAdjacentHTML("afterend",html)
            }
}

