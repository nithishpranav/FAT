<?php
session_start();
include('connection.php');
//opt update
if (isset($_POST["subject_opt"],$_POST["session_opt"],$_POST["optin_subjects"])){
    //include('connection.php');
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
    $existing_sub_sql = "DELETE from substitute_session 
    where substitute_ID='$session' and substitute_course = '$course'  and substitute_day = '$day'";
    $execute=mysqli_query($con,$existing_sub_sql);

    //update new substitution
    $optin_update_sql = "INSERT INTO substitute_session
    (substitute_ID,substitute_day,substitute_course,substitute_semester,substitute_subject)
    VALUES ('$session','$day','$course','$sem','$sub_optin')";
    $execute=mysqli_query($con,$optin_update_sql);
}

if(isset($_SESSION['uid'])){
    $userid = $_SESSION['uid'];
    $usersql = "select * from teacher where teacher_ID  = '$userid'";
    $userresult = mysqli_query($con,$usersql);
    $userrow = mysqli_fetch_array($userresult,MYSQLI_ASSOC);
    include("teacherTable.php");
    //announcement
    if(isset($_POST['announce_subject'],$_POST['announcement_text'])){
        $a_sub = $_POST['announce_subject'];
        $announcement = $_POST['announcement_text'];
        unset($_POST['announcement_text']);
        unset( $_POST['announce_subject']);
        if($a_sub != ""){
            $announcement_sql = "INSERT INTO announcement
            (subject_ID,teacher_ID,announcement)
            
            VALUES('$a_sub','$userid','$announcement')";
            $execute=mysqli_query($con,$announcement_sql);
        }
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    </head>
    <head>
        <title>Teacher</title>
        <link rel="stylesheet" type ="text/css" href="styles.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="./vendor/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        

</script>    
    </head>
    <body >
    <h1><?php echo $userrow['teacher_name'];?></h1>
    </body>

    <div class="top">
        <img src="https://1.bp.blogspot.com/-l_CBUtQxwRk/XmkkGnEuVZI/AAAAAAAA0zU/FpQtqOiERbgg9RiaHLCegQEY-UuLzlkZgCLcBGAsYHQ/s1600/images%2B%25282%2529.png" height="100%" width="6%">
        <h1>PSG COLLEGE OF TECHNOLOGY</h1>
    </div>
    <div class="bottom">
    <div class="sidebar">
        <div class="info">
            <h2><?php echo $userrow['teacher_name'];?></h2>
            <h3><?php echo $userrow['teacher_ID'];?></h3>
        </div>
        <hr>
        <a onclick="dayAppear()">Time Table</a>
        <a onclick="announceAppear()">Announcements</a>
        <a onclick="optoutAppear()">Opt Out</a>
        <a onclick="examAppear()">Exams</a>
        <a href="logout.php">Logout<a>
    </div>
    </div>
    <div class = "center">
    <table id = "day">
        <tr>
            <td  id = "displayDay" rowspan="3"></td>
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
    <?php
    $j = 0;
    foreach($dayarray as $val){
    ?>
    <td > <?php echo $val;?> </td>
    <?php
    }
    ?>
    </table>

 
    <?php
    include("teacherBroadcast.php");
    ?>
    <div id = "announcement" style ="display: none;">
    <form action="teacher.php" method="POST">
    Announce:
    <select name ="announce_subject">
        <option value="">SELECT</option>
        <?php
            while($srow = $subresult->fetch_assoc()){
        ?>
            <option value="<?php echo $srow['subject_ID']; ?>"> <?php echo $srow["subject_ID"];?> </option>
        <?php
            }   
        ?>
        </select>
        <input type="text" name="announcement_text" value="Type Here">
        <input type="submit" value="Announce">
    </form>
    <p> Announcements</p>
    <table align="center" >
    <tr>
        <td >Time</td>
        <td >Subject</td>
        <td >Annoucement</td>
    </tr>
    <?php
        foreach($t_announ_result as $t_a_row){
    ?>
    <tr>
        <td><?php echo $t_a_row['a_timestamp']?></td>
        <td><?php echo $t_a_row['subject_ID']?></td>
        <td><?php echo $t_a_row['announcement']?></td>
    <tr>
    <?php
    }
    ?>
    </table>

    </div>


    <?php
    include("teacherOptout.php");
    //optout and optin feature
    ?>
    <div id = "optout" style ="display: none;">
        <form action ="teacher.php" method = "POST">
        Opt Out:
        <br>
            <div class = "Select">
                <select name = "subject_opt" id = "subject-opt" onChange="getSub(this.value);">
                    <option value="">Select Subject to Optout</option>
                    <?php
                    while($srow_opt = $subjectresult_opt->fetch_assoc()){
                    ?>
                        <option value="<?php echo $srow_opt['session_subject'];?>"> 
                        <?php echo $srow_opt['session_subject'];?> </option>               
                    <?php
                    }   
                    ?>
                </select>
            <br>
                <select name="session_opt" id="session-opt" onChange="getSes(this.value);">
                <option value=''>Select</option>
            
                </select>
                <select name="optin_subjects" id="optin-subjects" onChange="getOpt(this.value);">
                <option value=''>Select</option>
                </select>
            </div>
            <br>
            <input type="submit" value="Confirm">
        </form>
    </div>
    </div>

    <script src="./vendor/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    
<script>
    //used to store the values selected in the drop down box
    var gsub;
    var gses;
    var gopt;
    function getSub(val) {
    gsub = val;
    //$("#loader").show();
	$.ajax({
	type: "POST",
	url: "teacherSessionopt.php",
	data:'subject_optout='+val,
	success: function(data){
		$("#session-opt").html(data);
		//$("#loader").hide();
	}
	});
    }
    function getSes(val) {
    gses = val;
    //$("#loader").show();
	$.ajax({
    
	type: "POST",
	url: "teacherOptin.php",
	//data:'session_optout='+val,
    data: {session_optout: val, sub_optout: gsub},
	success: function(data){
		$("#optin-subjects").html(data);
		//$("#loader").hide();
	}
	});
    }
    function getOpt(val) {
    gopt = val;
    }
    function optSubmit(){
        $.ajax({
	type: "POST",
	url: "teacherOptupdate.php",
    data: {sub_optin: gopt,session_optout: gses, sub_optout: gsub},
	success: function(data){
		$("#opt-submit").html(data);
		//$("#loader").hide();
	}
	});
    }

</script>


   <script src = "teacher.js"></script>
    </html>
    
<?php

}
else{
    header("Location:index.html");
    exit();
}

?>