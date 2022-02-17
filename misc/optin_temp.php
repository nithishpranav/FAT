<?php
//session_start();
include('connection.php');

// $userid = $_SESSION['uid'];
// $usersql = "select * from teacher where teacher_ID  = '$userid'";
// $userresult = mysqli_query($con,$usersql);
// $userrow = mysqli_fetch_array($userresult,MYSQLI_ASSOC);

if (! empty($_POST["session_optout"])) {
    //$ses_opt = $_POST["session_optout"];
    //$sub_opt = $_POST["subject_optout"];
    // $sub_opt_sql = "select * from subjects where s_ID = '$sub_opt'";
    // $sub_opt_res = mysqli_query($con,$sub_opt_sql);
    // $sub_opt_row = mysqli_fetch_array($sub_opt_res, MYSQLI_ASSOC);

    // $course = $sub_opt_row['s_course'];
    // $sem = $sub_opt_row['s_semester'];
    $course = 'mx';
    $sem = '1';

    $sub_optin_sql = "select s_ID from subjects where s_course = 'mx'";
    $sub_optin_res = mysqli_query($con,$sub_optin_sql);
    ?>
    <option value="">Select </option>
    <?php
        foreach ($sub_optin_res as $sub) {
    ?>
        <option value="<?php echo $sub["s_ID"]; ?>"><?php echo $sub["s_ID"]; ?></option>
    <?php
    }
}

// if($tt!=''){//echo "h";
//     $optout_subdetailsql = "select * from subjects where s_ID = '$tt'";
//     //$optout_subdetailsql = "select * from subjects where s_ID = '$subject_opt'";
//     $optout_row = mysqli_fetch_array($optout_subdetailresult, MYSQLI_ASSOC);
//     $course = $optout_row['s_course'];
//     $sem = $optout_row['s_semester'];

//     $optinarray = array();
//     $optinsql = "select s_ID from subjects 
//     where s_course = '$course' and s_semester = '$sem' and s_ID != '$tt'";
//     $optin_result = mysqli_query($con,$optinsql);
    
//     while($optin_row = $optin_result->fetch_assoc()) {
//          $options .= "<option value='".$optin_row['s_ID']."'>".$optin_row['s_ID']."</option>";
//          //$options .= "<option value='".$optin_row['s_ID']."'>"h"</option>";
//      }
//     //while($userrow =$userresult->fetch_assoc()){
//        //$options .= "<option value=''>".$userid."</option>";
    
//     echo $options; 
// }
?>

