<?php

$k = 4;
$arr = array(1, 4, 2, 10, 23, 3, 1, 0, 50);

function max_sum($k, $arr)
{
    $sum = 0;
    $max = PHP_INT_MIN;
    $count = 0;
    $aix = 0;

    for ($i=0; $i < sizeof($arr); $i++) {
       if  ($count < $k) {
           $sum += $arr[$i];
           $count += 1;
           continue;
       }

       if ($max < $sum) $max = $sum;

       $sum -= $arr[$aix];
       $sum += $arr[$i];
       $aix++;
    }

    return $max > $sum? $max : $sum;
};
echo ("Max sum $k numbers at a time is ".max_sum($k,$arr)."\n");
?>