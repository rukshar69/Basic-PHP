<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>


<?php
include "header.html"
?>
<p>Hello World</p>
<?php
include "footer.html"
?>

<?php
$title = "My First Post";
$author = "Mike";
$wordCount = 400;
include "article-header.php" ?>

<?php
include "useful-tools.php";
sayHi("mike");
?>
</body>

</html>
