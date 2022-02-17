<?php

include('connection.php');
$userid = $_SESSION['uid'];
$usersql = "select * from teacher where teacher_ID  = '$userid'";
$userresult = mysqli_query($con,$usersql);
$userrow = mysqli_fetch_array($userresult,MYSQLI_ASSOC);

$erray = array();
$esql = "select subject_ID from teachersubject where teacher_ID = '$userid'  order by subject_ID";
$eresult = mysqli_query($con,$esql);

?>