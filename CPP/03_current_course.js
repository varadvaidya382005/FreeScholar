
function Admission_year_valid()
{
 if(document.getElementById("validationCustom01").selectedIndex==0){
     document.getElementById("validationCustom01_label").innerHTML="Please select the proper year";
     document.getElementById("validationCustom01_label").style.color="red";
    document.getElementById("btn1").disabled=true;
 }   else{

    document.getElementById("validationCustom01_label").innerHTML="";
    document.getElementById("btn1").disabled=false;
 }
}


function Taluka_valid(){
    if(document.getElementById("validationCustom04").selectedIndex==0){
        document.getElementById("validationCustom04_label").innerHTML="Please select an proper option";
        document.getElementById("validationCustom04_label").style.color="red";
        document.getElementById("btn1").disabled=true;
    }else{
        document.getElementById("validationCustom04_label").innerHTML="";
        document.getElementById("btn1").disabled=false;
    }
    
} 
function Qualification_valid(){
    if(document.getElementById("validationCustom05").selectedIndex==0){
        document.getElementById("validationCustom05_label").innerHTML="Please select an proper option";
        document.getElementById("validationCustom05_label").style.color="red";
        document.getElementById("btn1").disabled=true;
    }else{
        document.getElementById("validationCustom05_label").innerHTML="";
        document.getElementById("btn1").disabled=false;
    }
}

function stream_valid(){
    if(document.getElementById("validationCustom06").selectedIndex==0){
        document.getElementById("validationCustom06_label").innerHTML="Please select an proper option";
        document.getElementById("validationCustom06_label").style.color="red";
        document.getElementById("btn1").disabled=true;
    }else{
        document.getElementById("validationCustom06_label").innerHTML="";
        document.getElementById("btn1").disabled=false;
    }
}
function College_valid(){
    if(document.getElementById("validationCustom07").selectedIndex==0){
        document.getElementById("validationCustom07_label").innerHTML="Please select an proper option";
        document.getElementById("validationCustom07_label").style.color="red";
        document.getElementById("btn1").disabled=true;
    }else{
        document.getElementById("validationCustom07_label").innerHTML="";
        document.getElementById("btn1").disabled=false;
    }
} 
function Year_of_study_valid(){
    if(document.getElementById("validationCustom13").selectedIndex==0){
        document.getElementById("validationCustom13_label").innerHTML="Please select an proper option";
        document.getElementById("validationCustom13_label").style.color="red";
        document.getElementById("btn1").disabled=true;
    }else{
        document.getElementById("validationCustom13_label").innerHTML="";
        document.getElementById("btn1").disabled=false;
    }

}
function Completed_valid(){
    if(document.getElementById("validationCustom14").selectedIndex==0){
        document.getElementById("validationCustom14_label").innerHTML="Please select an proper option";
        document.getElementById("validationCustom14_label").style.color="red";
        document.getElementById("btn1").disabled=true;
    }else{
        document.getElementById("validationCustom14_label").innerHTML="";
        document.getElementById("btn1").disabled=false;
    }

}
function Cateoegery_valid(){
    if(document.getElementById("validationCustom16").selectedIndex==0){
        document.getElementById("validationCustom16_label").innerHTML="Please select an proper option";
        document.getElementById("validationCustom16_label").style.color="red";
        document.getElementById("btn1").disabled=true;
    }else{
        document.getElementById("validationCustom16_label").innerHTML="";
        document.getElementById("btn1").disabled=false;
    }
  
}
function Professional_valid(){
    if(document.getElementById("validationCustom15").selectedIndex==0){
        document.getElementById("validationCustom15_label").innerHTML="Please select an proper option";
        document.getElementById("validationCustom15_label").style.color="red";
        document.getElementById("btn1").disabled=true;
    }else{
        document.getElementById("validationCustom15_label").innerHTML="";
        document.getElementById("btn1").disabled=false;
    }
}
function Mode_valid(){
    if(document.getElementById("Mode").selectedIndex==0){
        document.getElementById("Mode_label").innerHTML="Please select an proper option";
        document.getElementById("Mode_label").style.color="red";
        document.getElementById("btn1").disabled=true;
    }else{
        document.getElementById("Mode_label").innerHTML="";
        document.getElementById("btn1").disabled=false;
    }
}
function Percentage_valid(){
    let val=document.getElementById("validationCustom10").value;
    let regx=/^([0-9]{2}\.||[0-9]{2})([0-9]{1,})$/g;
    if(!regx.test(val)){
        document.getElementById("validationCustom10_label").innerHTML="Please enter valid percentage";
        document.getElementById("validationCustom10_label").style.color="red";
        document.getElementById("btn1").disabled=true;
    }else{
        document.getElementById("validationCustom10_label").innerHTML="";
        document.getElementById("btn1").disabled=false;
    }
}
