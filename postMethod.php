<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>
<form action="postMethod.php" method="post">
    Password: <input type="password" name="password"><br>
    <input type="submit">
</form>
<br><br>
<body>

<?php
echo $_POST["password"];
?>
</body>

</html>
<?php
