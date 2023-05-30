<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>

<h1>Innehåll</h1>
<ul>
    <li><a href="?pages=start">Hem</a></li>
    <li><a href="?pages=blogg">Blogg</a></li>
    <li><a href="?pages=bilder">Bilder</a></li>
    <li><a href="?pages=Kontakt">Kontakt</a></li>
    <?php 
        if (isset($_SESSION['Logged'])) {
            echo '<li><a href="klotter.php">Klotter</a></li>';
        }
    ?>
</ul>