<?php
/**
 * User: s.zheleznitskij
 * Date: 11/11/13
 * Time: 3:32 PM
 */

class Linked_List
{
    protected $_head = null;
    protected $_tail = null;

    public function insert($item)
    {
        if ($this->_head == null) {
            $this->_head = $item;
            $this->_tail = $item;
            return;
        }

        $this->_tail->setNext($item);
        $this->_tail = $item;
    }

    public function __toString()
    {
        $current = $this->_head;
        $output = '';

        while ($current) {
            $output .= $current->getKey() . "\n";
            $current = $current->getNext();
        }

        return $output;
    }
}

class Item
{
    protected $_key = '';
    protected $_next = null;

    public function __construct($key)
    {
        $this->_key = $key;
    }

    public function setNext(&$next) { $this->_next = $next; }
    public function &getNext() { return $this->_next; }

    public function setKey($key) { $this->_key = $key; }
    public function getKey() { return $this->_key; }

    public function __toString()
    {
        return $this->_key . "\n";
    }
}

echo '<h1 style="text-align: center; font-style: italic">Set in array 10000 elemnts</h1>';
$start = microtime(true);
$startMemory = memory_get_usage();
$n = 10000;
$a = array();
for ($i = 0; $i < $n; $i++) {
    $a[$i] = new Item($i);
}
echo memory_get_usage() - $startMemory.'<br>';
$time = microtime(true) - $start;
printf($time);
echo '<br>';


echo '<h1 style="text-align: center; font-style: italic">Set  10000 elemnts using class</h1>';
$start = microtime(true);
$startMemory = memory_get_usage();
$n = 10000;
$a = new Linked_List();
for ($i = 0; $i < $n; $i++) {
    $a->insert(new Item($i));
}
echo memory_get_usage() - $startMemory.'<br>';
$time = microtime(true) - $start;
printf($time);
echo '<br>';