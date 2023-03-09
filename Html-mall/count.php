<?php 
    $hit = 0;    
    
   
    if(file_exists("hit.dat")){
        $hit = file_get_contents("hit.dat");
    }
    
    $hit++; 
    
    file_put_contents("hit.dat",$hit); 
    
    echo $hit;
?>

