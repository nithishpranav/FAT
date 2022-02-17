<?php
include('connection.php');
$sub_optout = $_POST["subject_opt"];
$session = $_POST["session_opt"];
$sub_optin = $_POST["optin_subjects"];
$date = date('Y-m-d');
$dayName=date("D", strtotime($date));
$day = date("w", strtotime("$dayName")); 

$sub_opt_sql = "select * from subjects where s_ID = '$sub_optout'";
$sub_opt_res = mysqli_query($con,$sub_opt_sql);
$sub_opt_row = mysqli_fetch_array($sub_opt_res, MYSQLI_ASSOC);
$course = $sub_opt_row['s_course'];
$sem = $sub_opt_row['s_semester'];

//check if substitution already made and delete if any
$existing_sub_sql = "delete from substitute_session 
where substitute_ID='$session' substitute_course = "$course" and  and substitute_day = "$day")";
$optin_update_sql = "INSERT INTO substitute_session 
(substitute_ID,substitute_day,substitute_course,substitute_semester,substitute_subject)
VALUES ('$session','$day','$course','$sem','$sub_optin')";
//$execute=mysqli_query($con,$optin_update_sql);

?>