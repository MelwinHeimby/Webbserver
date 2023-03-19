<?php 
    $user = $_POST['userName'];
    $pass = $_POST['pass'];
    file_put_contents("../users.txt","$user,$pass",FILE_APPEND);
    header("location: ../index.php");
?>