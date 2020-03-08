<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>

<form action="switch.php" method="post">
    What was your grade?
    <input type="text" name="grade">
    <input type="submit">
</form>

<?php
 $grade = $_POST["grade"];
 echo "$grade <br>";

 switch ($grade){
     case  "A":
         echo "You did amazing!!!<br>";
         break;
     case "B":
         echo "You did pretty good.<br>";
         break;
     case "C":
         echo "You did poorly<br>";
         break;
     case "D":
         echo "You did very bad.<br>";
         break;
     case "F":
         echo "You Failed!<br>";
         break;
     default:
         echo "Invalid Grade!<br>";
         break;
 }
?>
</body>

</html>
