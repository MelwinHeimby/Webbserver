<!doctype html>
<html>
    <head lang="sv"></head>
    <body>
        <?php
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];

            $ans = $_POST['dog'];
            
            if ($ans == "add")
            {
                $sum = $n1 + $n2;
                echo $sum;
            }
            if ($ans == "min")
            {
                $minus = $n1 - $n2;
                echo $minus;
            }
            if ($ans == "div")
            {
                $kvot = $n1 / $n2;
                echo $kvot;
            }
            
        ?>
    </body>
</html>