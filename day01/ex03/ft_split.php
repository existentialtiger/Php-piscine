#!/usr/bin/php
<?php
/**
 * @param $str
 * @return array|bool
 */
function ft_split($str){
    $str = preg_replace('!\s+!', ' ', $str);
    $arr1 = preg_split("[ ]", $str);
    sort($arr1);
    return $arr1;
}
?>