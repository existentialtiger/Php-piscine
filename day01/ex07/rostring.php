#!/usr/bin/php
<?php
if ($argc > 1){
    $arr1 = preg_split("[ ]", $argv[1]);
    $x = count($arr1);
    $i = 1;
    while ($i < $x){
        echo "$arr1[$i] ";
        $i++;
    }
    echo "$arr1[0]";
}
?>