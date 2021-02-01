<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops: foreach</title>
</head>
<body>
    <?php
      $ages = array(4, 8, 15, 16, 23, 42);

      foreach($ages as $age){
          echo "Age: {$age}<br/>";
      }
    ?>
    <br/> 

    <?php // foreach loops using assoc. arry
    $person = array (
                 "first_name" => "Chiamaka",
                 "last_name"  => "Ejiofor",
                 "address"    => "DLodge",
                 "city"       => "Owerri",
                 "state"      => "Imo",
                 "zip code"   => "430254"
    );

    foreach($person as $attribute => $data){
        $attr_nice = ucwords(str_replace("_", " ", $attribute));
        echo "{$attr_nice}: {$data}<br/>";
    }
    ?>
    <br/>

    <?php  
    $prices = array("Brand New Computer"   => 2000,
                   "1 month of lynda.com" => 25,
                   "Learning PHP"         => null);

                   foreach($prices as $item => $price) {
                       echo "{$item}: ";
                       if (is_int($price)) {
                           echo "$" . $price;
                       }else {
                           echo "priceless";
                       }
                         echo "<br/>";
                    }
    
    ?>


</body>
</html>