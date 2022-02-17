<?php
include('connection.php');

if (! empty($_POST["sub_optin"])) {
    $ses = $_POST["session_optout"];
    $optout = $_POST["subject_optout"];
    $optin = $_POST["sub_optin"];
    $date = date('Y-m-d');
    $dayName=date("D", strtotime($date));
    $day = date("w", strtotime("$dayName")); 



    $sub_opt_sql = "select * from subjects where s_ID = '$optout'";
    $sub_opt_res = mysqli_query($con,$sub_opt_sql);
    $sub_opt_row = mysqli_fetch_array($sub_opt_res, MYSQLI_ASSOC);

    $course = $sub_opt_row['s_course'];
    $sem = $sub_opt_row['s_semester'];
    $optin_update_sql = "INSERT INTO substitute_session 
    (substitute_ID,substitute_day,substitute_course,substitute_semester,substitute_subject)
    VALUES(1,2,'mx',1,'20MX13')";
    $execute=mysqli_query($con,$optin_update_sql);

   
    //}
    $mysqli→close();
    // if ($mysqli→query($sql)) {
    //     printf("Record inserted successfully.<br />");
    // }VALUES "."('$ses','$day','$course','$sem','$optin')
    // if ($mysqli→errno) {
    //     printf("Could not insert record into table: %s<br />", $mysqli→error);
    // }
    // $course = 'mx';VALUES ('$ses','$day','$course','$sem','$optin')";
    // $sem = '1';

    // $sub_optin_sql = "select s_ID from subjects where s_course = 'mx'";
    // $sub_optin_res = mysqli_query($con,$sub_optin_sql);

    }
//}