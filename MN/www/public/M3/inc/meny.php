<?php if (session_status() === PHP_SESSION_NONE)
{
	session_start();
}
?>


<h1>
    Innehåll
</h1>
<ul>
	<li><a href="index.php">Hem</a></li>
	<li><a href="pages/blogg.php">Blogg</a></li>
	<li><a href="pages/bilder.php">Bilder</a></li>
	<li><a href="pages/Kontakt.php">Kontakt</a></li>
	<?php 
		if (isset($_SESSION['Logged']))
		{
			echo '<li><a href="klotter.php">Klotter</a></li>';
		}
	?>
</ul>