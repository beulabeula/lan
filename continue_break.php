<!DOCTYPE html>
<html>
    <head>
        <title>table</title>
        </head>
<body>
    <?php
     $x=0;
     while($x<101){
        if($x==50){
            $x++;
            continue;
        }
        echo "number is:$x<br>";
        $x++;
     }
     echo "<hr>";
     $x=0;
     while($x<101){
        if($x==50){
            $x++;
            break;
        }
        echo "number is:$x<br>";
        $x++;
     }
    ?>
</body>
</html>