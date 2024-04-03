<?php

$numsTest1 = [1,1,2,3];
$numsTest2 = [1,1,2];
$numsTest3 = [1,1,1,5];

function isPossibleToSplit($nums) {
    $nums1 = [];
    $nums2 = [];
    if(count($nums)%2===0 || $nums >= 2){
        foreach($nums as $value){
            if (!in_array($value, $nums1)){
                $nums1[] = $value; 
            } else if (!in_array($value, $nums2)) {
                $nums2[] = $value;
            } else {
                return false;
            }
        }
        return true;
    } else return false;
}
echo "Задача 3046";
echo isPossibleToSplit($numsTest1);
echo "<br />";
echo isPossibleToSplit($numsTest2);
echo "<br />";
echo isPossibleToSplit($numsTest3);
