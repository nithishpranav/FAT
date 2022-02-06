<?php      
    session_start();
    include('connection.php');  
    $userid = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $userid = stripcslashes($userid);  
        $password = stripcslashes($password);  
        $userid = mysqli_real_escape_string($con, $userid);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where uid = '$userid' and password = '$password'";
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['uid'] = $userid;
            if($row["u_role"] == 'student'){
                header("Location:student.php");
            }
            else if($row["u_role"] == 'teacher'){
                header("Location:teacher.php");
            }
            else{
                echo "<h1> Login failed. Invalid username or password.</h1>";
            }
            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>       