<?php
    if (session_status() === PHP_SESSION_NONE){
		session_start();
	}

    $cleanMsg = strip_tags(trim($_POST['message']));
    
     
    $name = "<hr><p>Från: " . $_SESSION['user'] . "</p>";
    $msg = "<p>" . $cleanMsg . "</p>";
    
    file_put_contents("msg.dat",$name.$msg,FILE_APPEND);
    
    header("location: klotter.php"); //Omdirigerar till klotterplanket
?>

