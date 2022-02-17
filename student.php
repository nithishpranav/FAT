<?php
session_start();
include('connection.php');  

if(isset($_SESSION['uid'])){
    $userid =  $_SESSION['uid'];
    $sql = "select * from student where student_ID = '$userid'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    include("studentTable.php");
    include("studentsubject.php");
    
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type ="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1><?php echo $row['student_name'];?> </h1>
</body >
<div class="top">
        <img src="https://1.bp.blogspot.com/-l_CBUtQxwRk/XmkkGnEuVZI/AAAAAAAA0zU/FpQtqOiERbgg9RiaHLCegQEY-UuLzlkZgCLcBGAsYHQ/s1600/images%2B%25282%2529.png" height="100%" width="6%">
        <h1>PSG COLLEGE OF TECHNOLOGY</h1>
</div>
<div class="bottom">
    <div class="sidebar">
        <div class="info">
            <h2><?php echo $row['student_name'];?></h2>
            <h3><?php echo $row['student_ID'];?></h3>
        </div>
        <hr>
        <a onclick="dayAppear()">Day</a>
        <a  onclick="weekAppear()">Week</a>
        <a onclick="subjectAppear()">Subjects</a>
        <a onclick="tutorialAppear()">Exams</a>
        <a onclick="announcementAppear()">Announcements</a>
        <a href="logout.php">Logout<a>
    </div>
</div>
<div class="center">
    <table id = "day">
        <tr>
        <td  id = "displayDateTime" rowspan="3"></td>
        <td >1</td>
        <td >2</td>
        <td >3</td>
        <td >4</td>
        <td >5</td>
        <td >6</td>
        <td >7</td>
        </tr>
        <tr>
            <td >8:30-9:20</td>
            <td >9:20-10:10</td>
            <td >10:30-11:20</td>
            <td >11:20-12:10</td>
            <td >1:40-2:30</td>
            <td >2:30-3:20</td>
            <td >3:30-4:20</td>           
        </tr>
        <tr>
        <td id = "d1"><?php echo $temparray[0];?></td>
        <td id = "d2"><?php echo $temparray[1];?></td>
        <td id = "d3"><?php echo $temparray[2];?></td>
        <td id = "d4"><?php echo $temparray[3];?></td>
        <td id = "d5"><?php echo $temparray[4];?></td>
        <td id = "d6"><?php echo $temparray[5];?></td>
        <td id = "d7"><?php echo $temparray[6];?></td>
        </tr>
    <table>
</div>
    <table id = "week" style ="display: none;">
        <tr>
        <td rowspan="2">Days</td>
        <td >1</td>
        <td >2</td>
        <td >3</td>
        <td >4</td>
        <td >5</td>
        <td >6</td>
        <td >7</td>
        </tr>
        <tr>
            <td >8:30-9:20</td>
            <td >9:20-10:10</td>
            <td >10:30-11:20</td>
            <td >11:20-12:10</td>
            <td >1:40-2:30</td>
            <td >2:30-3:20</td>
            <td >3:30-4:20</td>           
        </tr>
        <tr>
        <td >Monday</td>
        <td ><?php echo $weekarray[0];?></td>
        <td ><?php echo $weekarray[1];?></td>
        <td ><?php echo $weekarray[2];?></td>
        <td ><?php echo $weekarray[3];?></td>
        <td ><?php echo $weekarray[4];?></td>
        <td ><?php echo $weekarray[5];?></td>
        <td ><?php echo $weekarray[6];?></td>
        </tr>
        <tr>
        <td >Tuesday</td>
        <td ><?php echo $weekarray[7];?></td>
        <td ><?php echo $weekarray[8];?></td>
        <td ><?php echo $weekarray[9];?></td>
        <td ><?php echo $weekarray[10];?></td>
        <td ><?php echo $weekarray[11];?></td>
        <td ><?php echo $weekarray[12];?></td>
        <td ><?php echo $weekarray[13];?></td>
        </tr>
        <tr>
        <td >Wednesday</td>
        <td ><?php echo $weekarray[14];?></td>
        <td ><?php echo $weekarray[15];?></td>
        <td ><?php echo $weekarray[16];?></td>
        <td ><?php echo $weekarray[17];?></td>
        <td ><?php echo $weekarray[18];?></td>
        <td ><?php echo $weekarray[19];?></td>
        <td ><?php echo $weekarray[20];?></td>
        </tr>
        <tr>
        <td >Thursday</td>
        <td ><?php echo $weekarray[21];?></td>
        <td ><?php echo $weekarray[22];?></td>
        <td ><?php echo $weekarray[23];?></td>
        <td ><?php echo $weekarray[24];?></td>
        <td ><?php echo $weekarray[25];?></td>
        <td ><?php echo $weekarray[26];?></td>
        <td ><?php echo $weekarray[27];?></td>
        </tr>
        <tr>
        <td >Friday</td>
        <td ><?php echo $weekarray[28];?></td>
        <td ><?php echo $weekarray[29];?></td>
        <td ><?php echo $weekarray[30];?></td>
        <td ><?php echo $weekarray[31];?></td>
        <td ><?php echo $weekarray[32];?></td>
        <td ><?php echo $weekarray[33];?></td>
        <td ><?php echo $weekarray[34];?></td>
        </tr>
        <tr>
        <td >Saturday</td>
        <td ><?php echo $weekarray[35];?></td>
        <td ><?php echo $weekarray[36];?></td>
        <td ><?php echo $weekarray[37];?></td>
        <td ><?php echo $weekarray[38];?></td>
        <td ><?php echo $weekarray[39];?></td>
        <td ><?php echo $weekarray[40];?></td>
        <td ><?php echo $weekarray[41];?></td>
        </tr>
    <table>

<div>
    <table id = "subject"  style ="display: none;">
        <tr>
            <th>Subject ID</th>
            <th>Subject Name</th>
        </tr>

    <?php
    while($srow = $subjectresult->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $srow['s_ID'];?></td>
        <td><?php echo $srow['s_name'];?></td>
    </tr>
    <div>
    <?php
    }

    include("studentExam.php");?>
    </div>
    <div>
    <table id = "subject"  style ="display: none;">
        <tr>
            <th>Subject ID</th>
            <th>Subject Name</th>
        </tr>
    </table>
    <table id = "tutorial"  style ="display: none;">
        <tr>
            <th>Subject ID</th>
            <th>Date</th>
        </tr>
    <?php
    while($trow = $tutresult->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $trow['tutorial_subject'];?></td>
        <td><?php echo $trow['tutorial_date'];?></td>
    </tr>

    <?php
    }
    ?>
    </table>
<div id = "student_announcement" style ="display: none;">  
    <?php
        include("studentAnnouncement.php");
    ?>
    <table align="center">
        <tr>
            <td >Time</td>
            <td >Subject</td>
            <td >Annoucement</td>
        </tr>
        <?php
        foreach($s_announ_res as $s_a_row){
        ?>
        <tr>
            <td><?php echo $s_a_row['a_timestamp']?></td>
            <td><?php echo $s_a_row['subject_ID']?></td>
            <td><?php echo $s_a_row['announcement']?></td>
        <tr>
        <?php
        }
        ?>
    </table>
</div>
</div>

<script src = "student.js">
    
</script>
<html>
    <?php

}
else{
    header("Location:index.html");
    exit();
}

?>

