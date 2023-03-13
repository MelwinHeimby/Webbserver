<?php
	class User 
	{
		private $fname;
		private $lname;
		private $username;
		private $password;
	
		public function __construct($fname, $lname, $username, $password) 
		{
			$this->fname = $fname;
			$this->lname = $lname;
			$this->username = $username;
			$this->password = $password;
		}
	
		public function getFname() 
		{
			return $this->fname;
		}
	
		public function getLname() 
		{
			return $this->lname;
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
		session_start();
		$users = [];
		$file = fopen("users.txt", "r");
		while($line = fgets($file)) 
		{
			$line = trim($line);
			$user_data = explode(",", $line);
			$user = new User($user_data[0], $user_data[1], $user_data[2], $user_data[3]);
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
				echo "lol" ;
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
						echo "gaaabago";
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

