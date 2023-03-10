<!doctype html>
<html>
    <head lang="sv"></head>
    <body>
        <h1>Matematiktest</h1>
        <h2>Resultatet</h2>
        <?php
            $name = $_POST['name'];
            $ans1 = $_POST['tal1'];
            $ans2 = $_POST['tal2'];
            $ans3 = $_POST['tal3'];
            $ans4 = $_POST['tal4'];
            $ans5 = $_POST['tal5'];
            $points = 0;

            if ($ans1 == 10){
                $points++;
            }
            if ($ans2 == 115){
                $points++;
            }
            if ($ans3 == 7){
                $points++;
            }
            if ($ans4 == 4){
                $points++;
            }
            if ($ans5 == 8){
                $points++;
            }

            echo("congrats ". $name ."<p>you got  " . $points . " points out of 5 </p>");
            
        ?>
    </body>
</html>