<?php


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

$list = new LinkedList();
$list->setFirst(13);
$list->setFirst(14);
$list->setFirst(15);
$list->setLast(22);
var_dump($list->getAll());
var_dump($list->current());
var_dump($list->prev());
var_dump($list->prev());
var_dump($list->prev());
var_dump($list->prev());
var_dump($list->current());
var_dump($list->next());
var_dump($list->next());
var_dump($list->next());
var_dump($list->next());
var_dump($list->prev());
var_dump($list->next());


