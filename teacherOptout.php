<?php
//session_start();
include('connection.php');
$userid = $_SESSION['uid'];
$usersql = "select * from teacher where teacher_ID  = '$userid'";
$userresult = mysqli_query($con,$usersql);
$userrow = mysqli_fetch_array($userresult,MYSQLI_ASSOC);
$date = date('Y-m-d');
$dayName=date("D", strtotime($date));
$day = date("w", strtotime("$dayName")); 
//select the subject
//select the session
//select the substitute subject

$subject_opt = array();
//$subjectsql = "selece session.session_subject and session.session_ID from session  where  "

// $subjectsql_opt = "select session.session_subject,session.session_ID 
// from session 
// inner join teachersubject on session.session_subject=teachersubject.subject_ID 
// where teachersubject.teacher_ID = '$userid' and session.session_day = '$day'
// order by session_ID";

$subjectsql_opt = "select distinct session_subject
from session 
where session_subject in (select subject_ID from teachersubject where teacher_ID = '$userid')
and session_day = '$day'";

//add day parameter in query
$subjectresult_opt = mysqli_query($con,$subjectsql_opt);
//just to check query
// if($subjectresult_opt->num_rows>0){
//     while($srow_opt = $subjectresult_opt->fetch_assoc()){
//         array_push($subject_opt,$srow_opt['session_subject']);
//         printf("%s \n",$srow_opt["session_subject"]);
//     }
//     //echo json_decode($subarray);
// }
//till here
?>
<?php
    // $temp = NULL;
    // if(isset($_POST['opt-submit'])){
    // if(!empty($_POST['subject_opt'])) {
    //     $temp = $_POST['subject_opt'];
    //     $opt_explode = explode('|',$temp);
    //     $optout_sub = $opt_explode[0];
    //     $optout_sesssion = $opt_explode[1];
    //     //echo 'You  chose: '.$optout_sub.' '.$optout_sesssion;
    // } else {
    //    // echo 'Please select the value.';
    // }
    // }
    ///optin 
    // $optin = true;
    // if($temp){
    //     $optin = true;
    //     $optout_subdetailsql = "select * from subjects where s_ID = '$optout_sub'";
    //     //$optout_subdetailsql = "select s_course,s_semester from subjects where s_ID = '$optout_sub'";
    //     $optout_subdetailresult = mysqli_query($con,$optout_subdetailsql);
    //     $optout_row = mysqli_fetch_array($optout_subdetailresult, MYSQLI_ASSOC);
    //     $course = $optout_row['s_course'];
    //     $sem = $optout_row['s_semester'];

    //     $optinarray = array();
    //     $optinsql = "select s_ID from subjects 
    //     where s_course = '$course' and s_semester = '$sem' and s_ID != '$optout_sub'";
    //     $optin_result = mysqli_query($con,$optinsql);

    //     $substitute = NULL;
    //     if(isset($_POST['optin_submit'])){echo "h";
    //         if(!empty($_POST['substitute_opt'])){
    //             {
    //             $substitute = $_POST['substitute_opt'];
    //             if($substitute){
    //                 //check and delete for any exsisting substitutions
    //                 $del_duplicate_substitutions = "delete from substitute_session 
    //                 where substitute_ID = '$optout_sesssion' and substitute_course = '$course' and substitute_semester = '$sem'";
    //                 if ($con->query($del_duplicate_substitutions) === TRUE) {
    //                     echo "Record deleted successfully";
    //                 } else {
    //                     echo "Error deleting record: " . $con->error;
    //                 }       
    //             }
    //         }
    //     }
    // }




    // if($selected){
    //     $stdarray = array();
    //     $stdsql = "select student_ID from student where student_course in
    //     (select s_course from subjects where s_id = '$selected')";
    //     $stdresult = mysqli_query($con,$stdsql);
    //     if($stdresult->num_rows>0){
    //         while($stdrow = $stdresult->fetch_assoc()){
    //             array_push($stdarray,$stdrow['student_ID']);
    //             printf(" %s \n",$stdrow["student_ID"]);
    //         }
    //         //echo json_decode($subarray);
    //     }
    // }    
    


?>
