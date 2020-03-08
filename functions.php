<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>

<?php
    function sayHi($name, $age){
        echo "hello $name!! You are  $age<br>";
    }

    function cube($number){
        $answer = $number*$number*$number;
        return $answer;
    }
    #sayHi("Mike",14);
    #sayHi("Dave",15);
    $cubeResult = cube(4);
    echo "the cube of x is $cubeResult<br>";
?>
</body>

</html>
