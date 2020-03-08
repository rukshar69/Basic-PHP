<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>

<form action="associativeArray.php" method="post">
    <input type="text" name="student"><br>
    <input type="submit">
</form>

<?php
$grades = array("Jim"=>"A+","Pam"=>"B-","Oscar"=>"C+");
#echo $grades["Jim"];
#echo  $grades["Oscar"];
$grades["Oscar"] = "F";
echo  $grades[$_POST["student"]];

?>
</body>

</html>
