<?php    
include_once('inc/db.inc.php');    
 
if(isset($_POST['country'])){
    $country = filter_input(INPUT_POST, 'country',FILTER_SANITIZE_SPECIAL_CHARS);
    
    /**Kör frågan mot databasen world och tabellen country. 
     * ? ERSÄTTS I RADEN UNDER MED EN PARAMETER
     */
    $stmt= $db->prepare("SELECT Name, Population, Code FROM country WHERE Name LIKE ? ORDER BY Name");
    $stmt->bindValue(1, "$country%", PDO::PARAM_STR);
    $stmt->execute();        
    
    /* Anger teckenkodningen för webbläsaren */
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    /* Anger att datan är i json-formatet */
    header('Content-Type: application/json');
    
    // Gör om arrayen till en array med json-objekt
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    
}
?>

