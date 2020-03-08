<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>

<form action="basicCalculator.php" method="get">
    <input type="number" name="num1"><br>
    <input type="number" name="num2"><br>
    <input  type="submit"><br>
</form>
<?php
$n1 = $_GET["num1"];
$n2 = $_GET["num2"];
$ans = $n1 + $n2;
echo "Answer: $ans<br>"
?>
</body>

</html>

