<?php
session_start();
include('connection.php');

if(isset($_SESSION['uid'])){
    $userid = $_SESSION['uid'];
    $usersql = "select * from teacher where teacher_ID  = '$userid'";
    $userresult = mysqli_query($con,$usersql);
    $userrow = mysqli_fetch_array($userresult,MYSQLI_ASSOC);
    include("teacherTable.php");
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    </head>
    <style>
        table, th, td {
        border:1px solid black;
        }
    </style>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type ="text/css" href="style1.css">
    </head>
    <body >
    <h1><?php echo $userrow['teacher_name'];?></h1>
    </body>

    <button onclick="dayAppear()">Day</button>
    <button onclick="weekAppear()">Week</button>
    
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

    <table id = "week" style ="display: none;">

    </table>
    <?php
    include("teacherBroadcast.php");
    ?>
    <form action="" method="post">
    Broadcast:
    <select name = "sub" id = "sub">
        <option value="">SELECT</option>
        <?php
            while($srow = $subresult->fetch_assoc()){
        ?>
                <option value="<?php echo $srow['s_ID']; ?>"> <?php echo $srow["s_ID"];?> </option>
        <?php
            }   
        ?>
          </select>
        <input type="submit" name = "submit" value="Submit">
  
    </form>


    <script src = "teacher.js">

    </script>    
    </html>

<?php

}
else{
    header("Location:index.html");
    exit();
}

?>