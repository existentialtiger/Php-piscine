#!/usr/bin/php
<?php

function ft_is_sort($array){
    $arr_arrive = $array;
    $arr_sort = $array;
    sort($arr_sort);
    $diff = ($arr_sort === $arr_arrive);
    return $diff;
}
?>
