<?php if (session_status() === PHP_SESSION_NONE){
	session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
</head>
<body>
    <?php if ($_SESSION['Logged']){
		echo $_SESSION['user'];
	}?>
</body>
</html>