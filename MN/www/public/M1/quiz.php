<!doctype html>
<html>
    <head lang="sv"></head>
    <body>
        <h1>Matematiktest</h1>
        <h2>Resultatet</h2>
        <?php
            $name = $_POST['name'];
            $ans1 = $_POST['svar1'];
            $ans2 = $_POST['svar2'];
            $ans3 = $_POST['svar3'];
            $ans4 = $_POST['svar4'];
            $ans5 = $_POST['svar5'];
            $ans6 = $_POST['svar6'];
            $points = 0;

            if ($ans1 == "kebab"){
                $points++;
            }
            if ($ans2 == "grön"){
                $points++;
            }
            if ($ans3 == 7){
                $points++;
            }
            if ($ans4 == 4){
                $points++;
            }
          
            if ($ans5 && $ans6 == 1) {
            $points++;
            }
            if ($points <= 2){
                echo "you need to sudy";
            }
            if ($points == 3 || $points == 4){
                echo "you passed";
            }
            if ($points == 5){
                echo("congrats $name you got $points points out of 5 you've mastered this");
            }
        ?>
    </body>
</html>