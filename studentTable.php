<?php

include('connection.php');  
$userid =  $_SESSION['uid'];
$sql = "select * from student where student_ID = '$userid'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $course = $row['student_course'];
    $semester = $row['student_semester'];
    echo'<script type = "text/JavaScript"></script>'; 
    $date = date('Y-m-d');
    $dayName=date("D", strtotime($date));
    $day = date("w", strtotime("$dayName"));  
    //$day = 2;
    $temparray = array();
    // $sql = "Select s_name from subjects where s_ID in(Select session_subject from session where session_course = '$course'
    $sqlselect  = "Select session_subject from session where session_course = '$course'
     AND session_semester = '$semester' AND session_day = '$day' order by session_ID";

   $res = mysqli_query($con,$sqlselect); 
   if ($res->num_rows > 0){
        while($trow = $res->fetch_assoc()) 
        {            
            array_push($temparray, $trow["session_subject"]); //save your data into array
        }
    }
    //$substitute_array = array();
    $substitute_select = "Select substitute_subject,substitute_ID from substitute_session 
    where substitute_course = '$course' and substitute_semester = '$semester' order by substitute_ID";
    $substitute_result = mysqli_query($con,$substitute_select);
    if($substitute_result->num_rows>0){
        while($substitute_row = $substitute_result->fetch_assoc()){
            $temparray[$substitute_row["substitute_ID"]-1] = $substitute_row["substitute_subject"];
            //echo $substitute_row["substitute_ID"];
        }
    }

    $weekarray = array();

    $weeksql = "select session_subject from session where session_course = '$course' and session_semester = '$semester' order by session_day,session_ID";
    $weekresult = mysqli_query($con,$weeksql);
    if($weekresult->num_rows>0){
        while($wrow = $weekresult->fetch_assoc()){
            array_push($weekarray,$wrow["session_subject"]);
        }
    }
?>