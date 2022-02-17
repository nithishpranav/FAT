<?php
include('connection.php');
$userid = $_SESSION['uid'];
$usersql = "select * from student where student_ID = '$userid";
$userresult = mysqli_query($con,$sql);
$userrow = mysqli_fetch_array($userresult,MYSQLI_ASSOC);
$course = $userrow['student_course'];
$semester = $userrow['student_semester'];

$tutsql = "select tutorial_date,tutorial_subject from tutorial where tutorial_subject in(select
s_ID from subjects where s_course = '$course' and s_semester = '$semester')";

$tutresult = mysqli_query($con,$tutsql);
if($tutresult->num_rows>0){
}
else{
    echo 'No upcoming tutorials';
}
?>
