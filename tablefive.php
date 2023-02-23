<!DOCTYPE html>
<html>
    <head>
        <title>table</title>
        <style>
           table{
            align:left;
            border:1px solid black;
            font-size:40px;
           }
        </style>
</head>
<body>
    <table>
    <?php
      for($i=1;$i<=10;$i++)
      {
        echo"<tr>";
        for($j=5;$j<=5;$j++)
        {
          echo"<td>$j*$i=".$i*$j."</td>";
        }
        echo"</tr>";
      }
    ?>
   </table>
</body>
</html>