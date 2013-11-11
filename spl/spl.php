<?php
/**
 * User: Sergij
 * Date: 10.11.13
 * Time: 9:33
 */
$obj = new SplDoublyLinkedList();
// Check wither linked list is empty
if ($obj->isEmpty())
{
    $obj->push(2);          //Adding nodes to Linked List;
    $obj->push(17);
    $obj->push(43);
    $obj->push(3);
    $obj->unshift(10);      //Adding the node at beginning of doubly linked list ;
}

echo "<br>Our Linked List: <br>";
print_r($obj);

$curr = $obj->current(); // this will return NULL as we have not set initial node;
$obj->rewind();// Rewinding the position so that current node points to first node ";

echo "<br>Current node of the linked list: ";
echo  $obj->current(); // this will print first node of the linked list.

echo "<br>Moving to Next node : ";
$obj->next();
echo $obj->current();

echo "<br>Moving to Next node : ";
$obj->next();
echo $obj->current();
echo "<br>Moving to Prev node : ";
$obj->prev();
echo $obj->current();
/////////////////////////////////////////////////////////////////////////////////////////////////
/*
 *
$list = new SplDoublyLinkedList();
$list->push('a');
$list->push('b');
$list->push('c');

echo 'TOP: '.$list->top()."\n";
echo 'BOTTOM: '.$list->bottom()."\n";

// OUTPUT:
// TOP: c
// BOTTOM: a

//echo "FIFO:\n";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
for ($list->rewind(); $list->valid(); $list->next()) {
    echo $list->current()."\n";
}

// OUTPUT:
// FIFO:
// a
// b
// c

echo "LIFO:\n";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
for ($list->rewind(); $list->valid(); $list->next()) {
    echo $list->current()."\n";
}
// OUTPUT:
// LIFO:
// c
// b
// a
*/