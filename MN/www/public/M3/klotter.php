<?php 
if (session_status() === PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION["Logged"]))
    header("location: index.php")
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8" />
    <title>Klotterplank</title>
</head>

<body>
<h1>Klotterplanket</h1>

<form action="saveMsg.php" method="post">
    <label>Meddelande</label><br>
    <textarea name="message" cols="45" rows="5"></textarea><br />    
    <input type="submit" value="Skicka">
</form>

<?php 
    /**
     * Om filen finns så skrivs innehållet ut
     * Om den inte finns så skapas en tom fil med namnet msg.dat
     * Vid problem ändra rättigheterna på filen msg.dat.
     *
     * OBS! Sökvägen nedan till 'msg.dat' kan behövas ändras. 
     */
    if(file_exists("msg.dat")){
        echo file_get_contents("msg.dat");
    }
?>
</body>
</html>

