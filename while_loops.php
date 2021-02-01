<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops: While</title>
</head>
<body>
    <?php
    $count = 0;
    while($count <= 10){
      echo $count . ",";
      $count++;  //  increment by 1
    }
       echo "<br/>";
       echo "Count: {$count}";
    ?>
<br/>


<?php 
    $count = 0;
    while($count <= 10){
        if ($count == 5){
            echo "Five, ";
            
        }else{
            echo $count . ",";
        }
        $count++;  //  increment by 1
    }
       echo "<br/>";
       echo "Count: {$count}";
    ?>
</body>
</html>