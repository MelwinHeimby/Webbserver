<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
</body>
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
			$_SESSION['inLoggad'] = true;
			echo $_SESSION['inLoggad'];

			exit();
		}
	}




?>
</html>