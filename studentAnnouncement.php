<?php
include('connection.php');
$userid = $_SESSION['uid'];
$usersql = "select * from student where student_ID  = '$userid'";
$userresult = mysqli_query($con,$usersql);
$userrow = mysqli_fetch_array($userresult,MYSQLI_ASSOC);
$course = $userrow['student_course'];
$s_announ_sql = "select * from announcement where subject_ID in(select s_ID from subjects where s_course = '$course')";
$s_announ_res = mysqli_query($con,$s_announ_sql);
?>