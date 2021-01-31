<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Logical</title>
</head>
<body>
    
<?php
$a = 4;
$b = 3;

if ( $a > $b) {
 echo "a is larger than b";
}

if ( $a < $b) {
    echo "a is not larger than b";
   }

?>
<br/>

<?php // only welcome new users
$new_user = true;
if ($new_user) {
  echo "<h1>Welcome!</h1>";
  echo "<p>We are glad you decided to join us!</p>";
}   
?>
<br/>

<?php // dont  divide by zero
$numerator = 20;
$denominator = 0;
$result = 0;
if ($denominator >   0) {
     $result = $numerator / $denominator;

}
echo "Result: {$result}";
?>



</body>
</html>