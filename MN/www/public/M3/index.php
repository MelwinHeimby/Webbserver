<?php
	if (session_status() === PHP_SESSION_NONE){
		session_start();
	}
	
	
	class User 
	{
		private $username;
		private $password;
	
		public function __construct($username, $password) 
		{
			$this->username = $username;
			$this->password = $password;
		}
	
		public function getUsername() 
		{
			return $this->username;
		}
	
		public function getPassword() 
		{
			return $this->password;
		}
	}
		
		$users = [];
		$file = fopen("users.txt", "r");
		while($line = fgets($file)) 
		{
			$line = trim($line);
			$user_data = explode(",", $line);
			$user = new User($user_data[0], $user_data[1]);
			$users[] = $user;
		}
		fclose($file);
	
		//testa användarnamn och lösenord
		$username = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "";
	
		foreach($users as $item) 
		{
			if($item->getUsername() === $username && $item->getPassword() === $password) 
			{
				$_SESSION['Logged'] = true;
				$_SESSION['user'] = $item->getUsername();
			}
			else {
				
			}
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
					if(isset($_SESSION['Logged']))
					{
						include('pages/privIndex.php');
					}

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

