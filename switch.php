<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
    $a = 2;
    switch ($a) {
        case 0:
            echo "a equals 0 <br/>";
            break;
            case 1:
                echo "a equals 1 <br/>";
                break;
                case 2:
                    echo "a equals 2 <br/>";
                    break;
                    case 3:
                        echo "a equals 3 <br/>";
                        break;
                        default:
                        echo "a is not 0, 1, 2, or 3<br/>";
                        break;
    }
    ?>
    <br/>

    <?php
    // ChineseZodiac
    //Whitespace doesnt matter
    //colons, semicolons and breaks do
    $year = 2013;
    switch (($year - 4) % 12){
        case 0: $zodiac = 'Rat';       break;
        case 1: $zodiac = 'Ox';        break;
        case 2: $zodiac = 'Tiger';     break;
        case 3: $zodiac = 'Rabbit';    break;
        case 4: $zodiac = 'Dragon';    break;
        case 5: $zodiac = 'Snake';     break;
        case 6: $zodiac = 'Horse';     break;
        case 7: $zodiac = 'Goat';      break;
        case 8: $zodiac = 'Monkey';    break;
        case 9: $zodiac = 'Rooster';   break;
        case 10: $zodiac = 'Dog';      break;
        case 11: $zodiac = 'Pig';      break;
    }
    echo "{$year} is the year of the {$zodiac}.<br/>";
    ?>
<br/>
 <?php // case with multiple values
$user_type = "food";
 switch ($user_type) {
     case 'student';
     echo "welcome";
     break;
     case 'press';
     echo "greetings!";
     break;
     case 'customer';
     echo "hello";
     break;
     // if you more than one cases to have the same out
     case 'food';
     case 'holiday';
     case 'happy';
     echo " Good";
     break;

 }
 ?>
</body>
</html>