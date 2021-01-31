<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    
<?php
// assigning variable
 $max_width = 980;

 // defining a constant
  define("MAX_WIDTH", 980);
  echo MAX_WIDTH;
?>
<br/>
<?php    // cant change the value
//  MAX_WIDTH += 1;
//  echo MAX_WIDTH;
?>

<br/>
<?php    // cant re-define constants
define("MAX_WIDTH", 981);
echo MAX_WIDTH;?>

</body>
</html>