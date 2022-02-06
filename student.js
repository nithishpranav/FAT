
var today = new Date();
var day = today.getDay();
var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
document.getElementById("displayDateTime").innerHTML =daylist[day];

var dAppear = true;
var wAppear = false;
var sAppear = false;
function dayAppear(){
    document.getElementById("week").style.display="none"; 
    document.getElementById("day").style.display="block";  
   
}
function weekAppear(){
    document.getElementById("day").style.display="none";
    document.getElementById("week").style.display="block"; 
    
}
function subjectAppear(){
    //document.getElementById("subject").style.display="none";
    if(sAppear == true){
        document.getElementById("subject").style.display="none";
        sAppear = false;
    }
    else{
        document.getElementById("subject").style.display="block";
        sAppear = true;
    }
}


// <?php

// include('connection.php');  
// $userid =  $_SESSION['uid'];
// $sql = "select * from student where student_ID = '$userid'";
// $result = mysqli_query($con,$sql);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//     $course = $row['student_course'];
//     $semester = $row['student_semester'];
//         //course
//     $temparray = array();
//     $sqlselect  = "Select session_subject from session where session_course = '$course'
//      AND session_semester = '$semester'";
//    // $res = $con->query($sqlselect);
//    $res = mysqli_query($con,$sqlselect); 
//    if ($res->num_rows > 0){
//         while($trow = $res->fetch_assoc()) 
//         {
//             //printf("%s",$trow[0]);
//             array_push($temparray, $trow); //save your data into array
//         }
//     }

//     echo json_encode($temparray);
// ?>