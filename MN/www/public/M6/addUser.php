<?php    
if(isset($_POST['userName'],$_POST['pwd'])){                
    include_once('inc/db.inc.php');    

    $user = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_SPECIAL_CHARS);
    $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    
    /* Bygger upp sql frågan */
    $stmt= $db->prepare("INSERT INTO user(userName, pwd) VALUES(:user, :pwd)");
    
    $stmt->bindValue(":user", $user);
    $stmt->bindValue(":pwd", $pwd);

    echo $user . $pwd;
    
    // Om INSERT gick bra! Om man användarnamn är upptaget fungerar inte insert
    try{
        $stmt->execute();
        header('Location: inmatning.html'); // Borde visa att allt gick bra!
    }catch(Exception $e){
        header('Content-Type: text/html; charset=utf-8');
        echo "<p>Kunde inte lägga till användaren. Kontrollera användarnamnet</p>";
        echo "<a href = 'inmatning.html'>Försök igen</a>";
    }
}
?>