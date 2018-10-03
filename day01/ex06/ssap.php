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
    foreach($arr1 as $value){
        echo "$value\n";
    }
}
?>