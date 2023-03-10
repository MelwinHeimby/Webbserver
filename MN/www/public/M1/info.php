<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Your Name</h1>
        <?php
            $name = $_POST['name'];
            $sname = $_POST['surname'];
            $age = $_POST['age'];
            $pension = 65 - $age;
            echo "$name $sname $pension";
        ?>
    </body>
</html>