let regx;
let val;

function addhar_valid() {

    val = document.getElementById("addharnumber").value;
    regx = /^([0-9]){4}\-([0-9]){4}\-([0-9]){4}$/g;

    if (!(regx.test(val))) {
        document.getElementById("addhar_number_label").innerHTML = "Invaid Addhar number";
        document.getElementById("addhar_number_label").style.color = "red";
        document.getElementById("btn");disabled=true;
    } else {
        document.getElementById("addhar_number_label").innerHTML = "";
        document.getElementById("btn").disabled=false;
    }
}


function Email_id_valid() {

    val = document.getElementById("Email_id").value;
    regx = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/g;
    
    if (!regx.test(val)) {
        document.getElementById("Email_id_label").innerHTML = "Invalid mail ID";
        document.getElementById("Email_id_label").style.color = "red";
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("Email_id_label").innerHTML = "";
        document.getElementById("btn").disabled=false;
    }
}

function Mobile_Number_valid() {
    val = document.getElementById("Mobile_Number").value;
    regx = /([0-9]){10}/g;
    if (!regx.test(val)) {
        document.getElementById("Mobile_Number_label").innerHTML = "Invalid mobile number";
        document.getElementById("Mobile_Number_label").style.color = "red";
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("Mobile_Number_label").innerHTML = "";
        document.getElementById("btn").disabled=false;
    }
}

function Date_of_Birth_valid() {
    val = document.getElementById("Date_of_Birth").value;
    regx = /^(0[1-9]||1[0-9]||2[0-9]||3[0-1]||[1-9])\/(0[1-9]||1[0-2]||[1-9])\/(200[0-9]||201[0-9]||202[0-9])$/g;

    if (!regx.test(val)) {
        document.getElementById("Date_of_Birth_label").innerHTML = "Invalid Date of Birth";
        document.getElementById("Date_of_Birth_label").style.color = "red";
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("Date_of_Birth_label").innerHTML = "";
        document.getElementById("btn").disabled=false;
    }
}

function Age_valid() {
    val = document.getElementById("Age").value;
    regx = /^([0-9]){1,3}$/g;


       if (!regx.test(val)) {
           document.getElementById("Age_label").innerHTML = "Invalid age";
           document.getElementById("Age_label").style.color = "red";
           document.getElementById("btn").disabled=true;
        } else {
            document.getElementById("Age_label").innerHTML = "";
            document.getElementById("btn").disabled=false;
        }
    
}

function Applicant_Full_Name_valid() {
    val = document.getElementById("Applicant_Full_Name").value;
    regx = /^([A-Za-z\s])+$/g;
    if (!regx.test(val)) {
        document.getElementById("Applicant_Full_Name_label").innerHTML = "Invalid full name";
        document.getElementById("Applicant_Full_Name_label").style.color = "red";
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("Applicant_Full_Name_label").innerHTML = "";
        document.getElementById("btn").disabled=false;
    }
}

function Parent_Number_valid() {

    val = document.getElementById("Parent_Number").value;
    regx = /([0-9]){10}/g;

    if (!regx.test(val)) {
        document.getElementById("Parent_Number_label").innerHTML = "Invalid Parent Number";
        document.getElementById("Parent_Number_label").style.color = "red";
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("Parent_Number_label").innerHTML = "";
        document.getElementById("btn").disabled=false;
    }
}

function Bank_Account_No_valid() {
    val = document.getElementById("Bank_Account_No").value;
    regx = /([0-9]){11,17}/g;

    if (!regx.test(val)) {
        document.getElementById("Bank_Account_No_label").innerHTML = "Invalid Bank Account Number";
        document.getElementById("Bank_Account_No_label").style.color = "red";
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("Bank_Account_No_label").innerHTML = "";
        document.getElementById("btn").disabled=false;
    }
}

function IFSC_valid() {
    val = document.getElementById("IFSC").value;
    regx = /^([A-Z]){4}([0-9]){7}$/g;
    if (!regx.test(val)) {
        document.getElementById("IFSC_label").innerHTML = "Invalid IFSC code";
        document.getElementById("IFSC_label").style.color = "red";
        document.getElementById("btn").disabled=true;
    } else {
        document.getElementById("IFSC_label").innerHTML = "";
        document.getElementById("btn").disabled=false;
    }
}
