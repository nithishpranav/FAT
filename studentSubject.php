<?php
include('connection.php');
$userid =  $_SESSION['uid'];
$usersql = "select * from student where student_ID = '$userid'";
$userresult = mysqli_query($con,$sql);
$userrow = mysqli_fetch_array($userresult, MYSQLI_ASSOC);
$course = $userrow['student_course'];
$semester = $userrow['student_semester'];

$sname= array();
$sid = array();
$subjectsql = "select s_ID, s_name from subjects where s_semester = '$semester' and s_course = '$course'
and s_ID != 'Free' order by s_ID";
$subjectresult = mysqli_query($con,$subjectsql);
// if($subjectresult->num_rows>0){
//     while($srow = $subjectresult->fetch_assoc()){
//         echo $srow['s_ID'];
//         echo $srow['s_name'];
//         array_push($sid,$srow['s_ID']);
//         array_push($sname,$srow['s_name']);
//     }
//     printf("%s",$sname[0]);
//}
?>