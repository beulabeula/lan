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
        for($j=1;$j<=10;$j++)
        {
          echo"<td>$i*$j=".$i*$j."</td>";
        }
        echo"</tr>";
      }
    ?>
   </table>
</body>
</html>
