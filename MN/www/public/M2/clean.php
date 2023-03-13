<?php
    $data = "lol";
    
    require_once('index.php');
    $data = $_POST['data'];
    cleanData($data);
    
    function cleanData($data)
    {
        $cleanedData = htmlspecialchars(strip_tags(trim($data)));
        echo $cleanedData;
        return $cleanedData;
    }

?>