<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script ></script>
    <title>sigma</title>
</head>
<body>
    <main>
        <form action="calculate.php" method="post">
            <input type="double" name="n1">
            <input type="double" name="n2">
            <br>
            <input type="submit" value="add" name="dog">
            <input type="submit" value="min" name="dog">
            <input type="submit" value="div" name="dog">
        </form>

        <h2>Register here:</h2>
    <form action="login.php" method="post">
		<label>Name:</label><br>
		<input type="text" id="fname" name="fname"><br>

		<label>Surname:</label><br>
		<input type="text" id="lname" name="lname"><br>

		<label>Username:</label><br>
		<input type="text" id="username" name="username"><br>

		<label>Password:</label><br>
		<input type="password" id="password" name="password"><br><br>

		<input type="submit" value="register">
	</form> 
	<br>
    <form method="post">
        <input type="text" name="data">
        <br>
        <button type="submit">submit</button>
    </form>
    <br>
    <form method="POST" action="login.php">
	    <label for="username">Username:</label>
	    <input type="text" id="username" name="username"><br>

	    <label for="password">Password:</label>
	    <input type="password" id="password" name="password"><br>

	    <input type="submit" value="Logga in">
    </form>

    </main>
    <footer>

    </footer>
</body>

<?php
    /*for ($i = 0; $i < 5; $i += 0.1)
    {
        print($i . "<br>");
    }*/
    /*$i = 0;
    while ($i < 4.9)
    {
        $i += 0.1;
        echo $i . "<br>";
    }*/
    
    /*$head = $page["head"] = "<h1>Välkommen</h1>";
    $main = $page["main"] = "<p>Detta är innehållet på min sida</p>";
    $footer = $page["footer"] = "<hr><p>Min sidfoot</p>";
    
    $pages = array($head, $main, $footer);
    
    foreach ($pages as $item)
    {
        echo $item , "<br>";
    }*/

    /*$data = $_POST['data'];
    cleanData($data);
    
    function cleanData($data)
    {
        $cleanedData = htmlspecialchars(strip_tags(trim($data)));
        echo $cleanedData;
        return $cleanedData;
    }*/

    

    

    


?>
</html>