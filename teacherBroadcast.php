<?php
include('connection.php');
$userid = $_SESSION['uid'];
$usersql = "select * from teacher where teacher_ID  = '$userid'";
$userresult = mysqli_query($con,$usersql);
$userrow = mysqli_fetch_array($userresult,MYSQLI_ASSOC);

$subarray = array();
$subsql = "select s_ID from subjects where s_teacherID = '$userid'  order by s_ID";
$subresult = mysqli_query($con,$subsql);
// if($subresult->num_rows>0){
//     while($srow = $subresult->fetch_assoc()){
//         array_push($subarray,$srow['s_ID']);
//         printf("%s \n",$srow["s_ID"]);
//     }
//     //echo json_decode($subarray);
// }
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
            //echo json_decode($subarray);
        }
    }
?>