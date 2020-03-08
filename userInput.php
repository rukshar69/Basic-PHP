<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>


<form action="userInput.php" method="get">
    Name: <input type="text" name="name">
    Age: <input type="text" name="age">
    <input type="submit">
</form>
<br>
<?php
$name = $_GET["name"];
$age = $_GET["age"];
echo "the given name is: $name<br>";
echo "the given age is: $age<br>";
?>

</body>

</html>
