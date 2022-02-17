<?php
include('connection.php');
$userid = $_SESSION['uid'];
$usersql = "select * from teacher where teacher_ID  = '$userid'";
$userresult = mysqli_query($con,$usersql);
$userrow = mysqli_fetch_array($userresult,MYSQLI_ASSOC);

$subarray = array();
$subsql = "select subject_ID from teachersubject where teacher_ID = '$userid'  order by subject_ID";
$subresult = mysqli_query($con,$subsql);

$t_announ_sql = "select a_timestamp,announcement,subject_ID from announcement where teacher_ID = '$userid'";
$t_announ_result = mysqli_query($con,$t_announ_sql);

?>
<?php
    $selected = NULL;
    if(isset($_POST['submit'])){
    if(!empty($_POST['sub'])) {
        $selected = $_POST['sub'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    }
    
    if($selected){
        $stdarray = array();
        $stdsql = "select student_ID from student where student_course in
        (select s_course from subjects where s_id = '$selected')";
        $stdresult = mysqli_query($con,$stdsql);
        if($stdresult->num_rows>0){
            while($stdrow = $stdresult->fetch_assoc()){
                array_push($stdarray,$stdrow['student_ID']);
                printf(" %s \n",$stdrow["student_ID"]);
            }
        }
    }
?>