<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions: Defining</title>
</head>
<body>
    <?php 
    function say_hello(){
        echo "Hello World!  <br/>";
    } 
      say_hello();

    function say_hello_to($word){
        echo "Hello {$word}! <br/>";
    }
       say_hello_to("sir");
       say_hello_to("ma");

       say_hello_loudly();

       function say_hello_loudly(){
        echo "Good bye <br/>";
    } 
    // function say_hello_loudly(){
      //  echo "We cant redefine a function.  <br/>";
    } 
    ?> 
</body>
</html>
