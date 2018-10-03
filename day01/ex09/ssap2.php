#!/usr/bin/php
<?php
if ($argc >= 1) {
    $a = "";
    $i = 1;
    while ($i < $argc) {
        $a = $a . $argv[$i];
        $a = $a . " ";
        $i++;
    }
    $a = preg_replace('!\s+!', ' ', $a);
    $arr1 = preg_split("[ ]", $a);
    sort($arr1);
    unset($arr1[0]);
    $j = 1;
    $k = count($arr1);
    while ($j < $k){
        echo "$arr1[$j]\n";
        $j++;
    }
}
?>