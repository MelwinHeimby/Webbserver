<?php 
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <form action="signUp.php" method="post">
        <label for="userName">UserName</label>
        <br>
        <input type="text" name="userName">
        <br><br>
        <label for="pass">Password</label>
        <br>
        <input type="text" name="pass">
        <br>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>

