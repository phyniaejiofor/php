<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integers</title>
</head>
<body>
    <?php

    $var1 = 3;
    $var2 = 4;
    ?>

    Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5;?><br/>
 <br/>
   Absolute value:   <?php echo abs(0 - 300);  ?><br/>
   Exponential:      <?php echo pow(2, 8); ?><br/>
   Square root:      <?php echo sqrt(100); ?><br/>
   Module:           <?php echo fmod(20,7); ?><br/>
   Random:           <?php echo rand(); ?><br/>
   Random (min,max): <?php echo rand(1,10) ; ?><br/>

   <br/>
   += : <?php $var2 += 4; echo $var2; ?><br/>
   -= : <?php $var2 -= 3; echo $var2; ?><br/>
   * = : <?php $var2 *= 2; echo $var2; ?><br/>
   / = : <?php $var2 /= 4; echo $var2; ?><br/>

   <br/>
   increment: <?php $var2++; echo $var2; ?><br/>
   decrement:<?php $var2--; echo $var2--;?><br/>

   <br/>

   <?php

   echo 1 + "5"
   
   ?>



</body>
</html>