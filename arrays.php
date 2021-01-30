<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
<?php

$numbers = array(4,55,30,8,7);
echo $numbers[2];
?>

<br/>
<?php $mixed = array(6, "fox", "dog", array("x", "y", "z")) ;?><br/>
<?php echo $mixed[2]; ?><br/>
<?php //echo $mixed[3]; ?><br/>
<?php //echo $mixed ?><br/>

<!-- getting a value in the other array -->
<?php echo $mixed[3][2]; ?><br/>

<!-- adding things to array -->
<?php echo $mixed[2] = "cat"; ?><br/>
<?php echo $mixed[4] = "mouse"; ?><br/>

<!-- to add a value at the end of an array -->
<?php echo $mixed[] = "snail";?><br/>

<?php
//PHP 5.4 added the short array syntax.
$array = [1,2,3];
?>


<pre>
<?php echo print_r($mixed); ?>
</pre>
</body>
</html>