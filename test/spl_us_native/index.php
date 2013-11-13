<?php
/**
 * User: s.zheleznitskij
 * Date: 11/11/13
 * Time: 4:42 PM
 */

echo '<h1 style="text-align: center; font-style: italic">set 10000 elements using SPL</h1>';

$start = microtime(true);
$startMemory = memory_get_usage();
$list = new SplDoublyLinkedList();
for($i = 1; $i < 10000; $i++){
    $list->push($i);
}
echo memory_get_usage() - $startMemory.'<br>';
$time = microtime(true) - $start;
printf($time);
echo '<br>';

echo '<h1 style="text-align: center; font-style: italic">set 10000 elements in array ussing array_unshift </h1>';

$start = microtime(true);
$startMemory = memory_get_usage();
$stackFifo = array();
for($i = 1; $i < 10000; $i++){
    array_unshift($stackFifo, $i);
}
echo memory_get_usage() - $startMemory.'<br>';
$time = microtime(true) - $start;
printf($time);
echo '<br>';

/*
echo '<h1 style="text-align: center; font-style: italic">set 10000 elements in array ussing array_push </h1>';

$start = microtime(true);
$startMemory = memory_get_usage();
$stackFifo2 = array();
for($i = 1; $i < 10000; $i++){
    array_push($stackFifo2, $i);
}
echo memory_get_usage() - $startMemory.'<br>';
$time = microtime(true) - $start;
printf($time);
echo '<br>';
*/


