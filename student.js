
var today = new Date();
var day = today.getDay();
var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
document.getElementById("displayDateTime").innerHTML =daylist[day];

var dAppear = true;
var wAppear = false;
var sAppear = false;
function dayAppear(){
    document.getElementById("week").style.display="none"; 
    document.getElementById("subject").style.display="none";
    document.getElementById("tutorial").style.display="none";
    document.getElementById("student_announcement").style.display="none";


    document.getElementById("day").style.display="block";  
   
}
function weekAppear(){
    document.getElementById("day").style.display="none";
    document.getElementById("subject").style.display="none";
    document.getElementById("tutorial").style.display="none";
    document.getElementById("student_announcement").style.display="none";

    document.getElementById("week").style.display="block"; 
    
}
function subjectAppear(){
    //document.getElementById("subject").style.display="none";
    document.getElementById("day").style.display="none";
    document.getElementById("week").style.display="none"; 
    document.getElementById("tutorial").style.display="none";
    document.getElementById("student_announcement").style.display="none";

    document.getElementById("subject").style.display="block";
}
function tutorialAppear(){
    //document.getElementById("subject").style.display="none";
    document.getElementById("day").style.display="none";
    document.getElementById("week").style.display="none"; 
    document.getElementById("subject").style.display="none";
    document.getElementById("student_announcement").style.display="none";
    document.getElementById("tutorial").style.display="block";
}

function announcementAppear(){
    document.getElementById("day").style.display="none";
    document.getElementById("week").style.display="none"; 
    document.getElementById("subject").style.display="none";
    document.getElementById("tutorial").style.display="none";
    document.getElementById("student_announcement").style.display="block";
    
}
