<?php
    /**
     * Formaterar och sparar namn samt meddelande till filen
     * msg.dat
     * 
     * Programmet saknar nödvändiga kontroller
     * @author Henrik Bygren
     */
    $cleanName = strip_tags(trim($_POST['name']));
    $cleanMsg = strip_tags(trim($_POST['message']));
    
     
    $name = "<hr><p>Från: " . $cleanName . "</p>";
    $msg = "<p>" . $cleanMsg . "</p>";
    
    file_put_contents("msg.dat",$name.$msg,FILE_APPEND);
    
    header("location: klotter.php"); //Omdirigerar till klotterplanket
?>

