<?php
/**
 * User: s.zheleznitskij
 * Date: 11/12/13
 * Time: 12:51 PM
 */

class LinkedList
{

    protected $elements = array();
    protected $current;

    public function setFirst($element)
    {
        array_unshift($this->elements, $element);
        $this->current = $element;
    }
    public function getAll()
    {
        return $this->elements;

    }
    public function setLast($element)
    {
        array_push($this->elements, $element);
        $this->current = $element;
    }
    public function current()
    {
        return $this->current;
    }
    public function prev()
    {
        if(array_search($this->current, $this->elements) == 0){
            return 'You are on the first element now';
        }else{
            return $this->current = $this->elements[array_search($this->current, $this->elements) - 1];
        }
    }
    public function next()
    {
        if (isset($this->elements[array_search($this->current, $this->elements) + 1])){
            return $this->current = $this->elements[array_search($this->current, $this->elements) + 1];
        }else{
            return "You are on the last element now";
        }

    }
}

echo '<h1 style="text-align: center; font-style: italic">set 10000 elements  ussing my class </h1>';

$start = microtime(true);
$startMemory = memory_get_usage();
$list = new LinkedList();
for($i = 1; $i < 10000; $i++){
    $list->setFirst($i);
}
echo memory_get_usage() - $startMemory.'<br>';
$time = microtime(true) - $start;
printf($time);
echo '<br>';

echo '<h1 style="text-align: center; font-style: italic">set 10000 elements in array ussing array_push </h1>';

$start = microtime(true);
$startMemory = memory_get_usage();
$res = array();
for($i  = 0; $i<10000; $i++){
    array_push($res, $i);
}
echo memory_get_usage() - $startMemory.'<br>';
$time = microtime(true) - $start;
printf($time);

