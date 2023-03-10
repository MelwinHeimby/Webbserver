<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Converter</title>
</head>
<body>
<h1>Dollar to SEK</h1>
<?php
    $dollar = $_POST['dollar'];
    $sek = $dollar * 9.7;
    
    echo "$dollar $  =  $sek kr";
?>
</body>
</html>

