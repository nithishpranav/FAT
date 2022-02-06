<?php
session_start();
if(isset($_SESSION['uid'])){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type ="text/css" href="style1.css">
    </head>
    <body>
        <h1>Hello,<?php echo $_SESSION['uid'];?> </h1>
        <a href="logout.php">Logout</a>
    </body>
    <html>
    <?php

}
else{
    header("Location:index.html");
    exit();
}

?>