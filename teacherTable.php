<?php

include('connection.php');
$userid = $_SESSION['uid'];
$usersql = "select * from teacher where teacher_ID  = '$userid'";
$userresult = mysqli_query($con,$usersql);
$userrow = mysqli_fetch_array($userresult,MYSQLI_ASSOC);
$date = date('Y-m-d');
$dayName=date("D", strtotime($date));
$day = date("w", strtotime("$dayName")); 

$dayarray = array();
$daysql = "select session_subject,session_ID from session where session_day = '$day' and session_subject in(select subject_ID from teachersubject where teacher_ID = '$userid')";
//$daysql = "select session_subject,session_ID from session where session_day = '$day' and session_subject in
///(select s_ID from subjects where s_teacherID = '$userid')";
$dayresult = mysqli_query($con,$daysql);
if($dayresult->num_rows>0){
    $i = 1;
    while($drow = $dayresult->fetch_assoc()){
            while(strcmp(strval($i), $drow["session_ID"]) != 0){
                array_push($dayarray,"");
                $i++;
            }
            array_push($dayarray,$drow["session_subject"]);
        $i++;
    }   
    while($i<=7){
        array_push($dayarray,"");
        $i++;
    }
    //echo json_encode($dayarray);
}

//

// $weekarray = array();
// $weeksql = "select session_subject,session_ID from session where session_subject in (select  subject_ID from teachersubject where teacher_ID = '$userid') order by session_day,session_ID";
// $weekresult = mysqli_query($con,$weeksql);
// for($j = 0;$j<6;$j++){
//     $wrow = $weekresult->fetch_assoc();
//     for($i = 0;$i<7;$i++){
//         if(strcmp(strval($i));
//     }
// }
// ?>
