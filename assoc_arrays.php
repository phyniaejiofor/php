<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrys</title>
</head>
<body>
    
<?php $assoc = array("first_name" => "Chiamaka", "last_name" => "Ejiofor") ;?>
<?php echo $assoc["first_name"] ;?><br/>
<?php echo $assoc["first_name"]. " ". $assoc["last_name"] ;?><br/>

<?php $assoc["first_name"] =  "Phynia"; ?><br/>
<?php echo $assoc["first_name"]. " ". $assoc["last_name"] ;?><br/>

<!-- Associative arrays get values with their key values WHILE arrays get values with their positions -->
</body>
</html>