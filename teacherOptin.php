<?php
session_start();
include('connection.php');

if (! empty($_POST["session_optout"])) {
    $ses_opt = $_POST["session_optout"];
    $sub_opt = $_POST["sub_optout"];
    $sub_opt_sql = "select * from subjects where s_ID = '$sub_opt'";
    $sub_opt_res = mysqli_query($con,$sub_opt_sql);
    $sub_opt_row = mysqli_fetch_array($sub_opt_res, MYSQLI_ASSOC);

    $course = $sub_opt_row['s_course'];
    $sem = $sub_opt_row['s_semester'];

    $sub_optin_sql = "select s_ID from subjects where s_course = '$course' and s_semester = '$sem' and s_ID != '$sub_opt' ";
    $sub_optin_res = mysqli_query($con,$sub_optin_sql);
    ?>
    <option value="">Select Session</option>
    <?php
        foreach ($sub_optin_res as $sub) {
    ?>
        <option value="<?php echo $sub["s_ID"];?>"><?php echo $sub["s_ID"]; ?></option>
    <?php
    }
}
?>

