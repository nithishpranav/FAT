<?php
include('connection.php');
if (! empty($_POST["subject_optout"])) {
    $date = date('Y-m-d');
    $dayName=date("D", strtotime($date));
    $day = date("w", strtotime("$dayName")); 
    $sub_opt = $_POST["subject_optout"];
    $ses_opt_sql = "select session_ID from session where 
    session_subject = '$sub_opt' and session_day = '$day'";
    $ses_opt_res = mysqli_query($con,$ses_opt_sql);
    ?>
    <option value="">Select Session</option>
    <?php
        foreach ($ses_opt_res as $ses) {
            ?>
    <option value="<?php echo $ses["session_ID"];?>"><?php echo $ses["session_ID"]; ?></option>
    <?php
    }
}
?>