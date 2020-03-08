<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>
<form action="betterCalculator.php" method="post">
    First Num:<input type="number" step="0.1" name="n1"><br>
    OP: <input type="textbox"  name="op"><br>
    Second Num:<input type="number" step="0.1" name="n2"><br>
    <input type="submit">
</form>

<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];

if ($op == "+"){
    echo $n1+$n2;
}elseif ($op == "-"){
    echo $n1-$n2;
}elseif ($op == "*"){
    echo  $n1*$n2;
}
elseif ($op == "/"){
    echo  $n1/$n2;
}else {
    echo "invalid operator";
}

?>
</body>

</html>
