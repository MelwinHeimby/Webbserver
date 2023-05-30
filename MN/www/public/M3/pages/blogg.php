<?php if (session_status() === PHP_SESSION_NONE){
	session_start();
}

?>

<!doctype html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<title>Länka in sidor med PHP</title>
	<link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<main role="main">
		<section>
		    <h1 id="titel">Blogg</h1>
			<p id="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tristique elementum nisl, et vehicula neque laoreet ut. Praesent sed ultrices purus.</p>
		</section>
	</main>
		<!-- End main -->
</body>
</html>
<style lang="scss">
	#titel {
		justify-content: left;
		position: relative;
		right: 50%;
	}

    #p {
		justify-content: left;
		position: relative;
		right: 50%;
	}
</style>
