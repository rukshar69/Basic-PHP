<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>

<?php
function getMax($n1, $n2){
    if($n1>$n2){
        return $n1;
    }else{
        return $n2;
    }
}

function getMax3($n1, $n2,$n3){
    if($n1>=$n2 && $n1>=$n3){
        return $n1;
    }
    elseif($n2>=$n1 && $n2>=$n3){
        return $n2;
    }
    else{
        return $n3;
    }
}

#echo getMax(3,90);
echo getMax3(30,40,20);

?>
</body>

</html>
