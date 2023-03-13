<!doctype html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<title>Länka in sidor med PHP</title>
	<link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<header>
      		<?php include "inc/header.php"; ?>
			<?php include "count.php"; ?>
      	</header>
		<!-- header -->

		<section id="leftColumn">
			<nav>
	        	<?php include "inc/meny.php"; ?>
	        </nav>
			<aside>
				<?php include "inc/aside.php"; ?>
		  	</aside>
		</section>
		<!-- End leftColumn -->

		<main role="main">
			<section>
			    <?php 
					$pages = 'start';
					if(isset($_GET['pages'])) {
						$pages = $_GET['pages'];
					}
					switch($pages) {
						case 'blogg': include('pages/blogg.php'); 
						break;	
						case 'bilder': include('pages/bilder.php'); 
						break;	
						case 'Kontakt': include('pages/Kontakt.php');
						break;
						
						default: include('pages/start.php');
					}
				?>
	  		</section>
		</main>
		<!-- End main -->

	<footer>
        <?php include "inc/footer.php"; ?>	
    </footer>
		<!-- End footer -->
	</div>
	<!-- End wrapper -->
</body>
</html>

