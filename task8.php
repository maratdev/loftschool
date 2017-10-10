<?php
$str= "Спасибо за посещение нашего портала!";
echo $str;

$result = explode(" ", $str);
echo "</br><pre>";
print_r($result);
echo "</br> <pre>";


$count = 1;
while($count <= 2) {
    $res = implode(" | ", array_reverse($result));  ;
    echo $res;
    ++$count;
}
?>
