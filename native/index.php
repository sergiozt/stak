<?php
/**
 * User: s.zheleznitskij
 * Date: 11/11/13
 * Time: 2:19 PM
 */


echo '<h1 style="text-align: center; font-style: italic">FIFO (queue)</h1>';
$stackFifo = array();
array_unshift($stackFifo, '1');
array_unshift($stackFifo, '2');
array_unshift($stackFifo, '3');
array_unshift($stackFifo, '4');
array_unshift($stackFifo, '5');
echo 'Set up elements:<br>';
foreach($stackFifo as $element){
    echo '|'. $element .'|<br>';
}
echo 'Get elements:<br>';
foreach($stackFifo as $element){
    echo '|'. array_shift($stackFifo) .'|<br>';
}




echo '<h1 style="text-align: center; font-style: italic">LIFO (stack)</h1>';
$stackFifo = array();
array_push($stackFifo, '1');
array_push($stackFifo, '2');
array_push($stackFifo, '3');
array_push($stackFifo, '4');
array_push($stackFifo, '5');
echo 'Set up elements:<br>';
foreach($stackFifo as $element){
   echo '|'. $element .'|<br>';
}
echo 'Get elements:<br>';
foreach($stackFifo as $element){
    echo '|'. array_pop($stackFifo) .'|<br>';
}

echo '<h1 style="text-align: center; font-style: italic">Linked list</h1>';
$transport = array('1', '2', '3', '4', '5');
echo '|'. current($transport) .'|<br>';
echo '|'. next($transport) .'|<br>';
echo '|'.  next($transport) .'|<br>';
echo '|'.  prev($transport) .'|<br>';
echo '|'.  end($transport) .'|<br>';