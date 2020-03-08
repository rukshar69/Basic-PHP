<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>

<?php
$phrase = "TO be oR noT tO be";
$lowerString = strtolower($phrase);
$upperString = strtoupper($phrase);
echo "Normal String: $phrase<br> ";
echo "Lower String: $lowerString<br> ";
echo "Upper String: $upperString <br>";

$len = strlen($phrase);
$firstChar = $phrase[0];
echo "Length of phrase $len <br>";
echo "first char: $firstChar<br>";

$phrase[10] = "W";
$modPhrase = str_replace("TO","BO",$phrase);
echo "modified phrase: $modPhrase<br>";

$sub1 = substr($phrase, 5);
echo "substring: $sub1<br>";
$sub2 = substr($phrase, 5, 5);
echo "substring2: $sub2<br>";
?>
</body>

</html>
<?php
