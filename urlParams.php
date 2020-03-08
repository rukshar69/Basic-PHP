<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>
<form action="urlParams.php" method="get">
    Name: <input type="text" name="name"><br>
    <input type="submit">
</form>
<br><br>
<body>

<?php
echo $_GET["name"];
?>
</body>

</html>
