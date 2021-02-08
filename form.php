<?php 


if($_SERVER['REQUEST_METHOD'] == "GET") {
$name =  $_GET['name'] ?? "";

$email =  $_GET['email'] ?? "";

echo "my name is $name and my email is: $email";

}

if($_SERVER['REQUEST_METHOD'] == "POST") {

    echo "this is a post request not a get request";

    $name =  $_POST['name'] ?? "";

$email =  $_POST['email'] ?? "";

echo "my name is $name and my email is: $email";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    
<form action="form.php" method="POST">
    <input type="text" name="name">
    <input type="text" name="email">

    <input type="submit"  value="submit">

</form>


</body>
</html>