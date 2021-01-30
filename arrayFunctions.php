<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
     
<?php $numbers = array(4,55,30,8,7); ?>

Count:       <?php echo count($numbers); ?><br/>
Max value:   <?php echo max($numbers);   ?><br/>
Min value:   <?php echo min($numbers);     ?><br/>

<br/>

<pre>
Sort:  <?php sort($numbers); print_r($numbers) ?><br/>
Reverse sort: <?php rsort($numbers); print_r($numbers)?><br/>
</pre>
<br/>

<!-- To turn an array into a string -->
Implode: <?php echo $num_string = implode(" * ", $numbers);?><br/>
Explode: <?php echo print_r(explode(" * ", $num_string)) ;?><br/>

<br/>
<!-- to tell whether a value is in array or not -->
15 in array? <?php echo in_array(15, $numbers);  // return T/F?><br/>
30 in array? <?php echo in_array(30, $numbers);  // return T/F?><br/>
</body>
</html> 