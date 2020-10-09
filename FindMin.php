<?php
function findMin($arr)
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min)
            $min = $arr[$i];
    }
    return $min;
}
$arr1 = [1,2,4,5,3,11,21,42,12,13];
echo findMin($arr1);