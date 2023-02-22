<!DOCTYPE html>
<html>
<head>
   <title>Document</title>
</head>
<body>
    <?php
    $method="power";
    switch($method){
        case"square":
            echo"square value is : ".(sqrt(2));
            break;
        case"absolute":
                echo"abs value is : ".(abs(77.1));
            break;
        case"power":
                    echo"power value is : ".(pow(8,9));
            break;
            default:
                    echo"It is not a method";
    }
    ?>
</body>
</html>