<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>

<?php
$isMale = true;
$isTall = false;
if($isMale && $isTall){ # || is or
    echo "You're TALL MALE!!!";
}
elseif ($isMale && !$isTall){
    echo "you're short male!!";
}
elseif (!$isMale && $isTall){
    echo "you're tall non-male";
}
else{
    echo "You're Not TALL MAEL!!";
}

?>
</body>

</html>
