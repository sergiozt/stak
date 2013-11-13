<?php
/**
 * User: Sergij
 * Date: 10.11.13
 * Time: 9:33
 */
echo '<h1 style="text-align: center; font-style: italic">Linked list (SPL)</h1>';
$obj = new SplDoublyLinkedList();
$obj->push(2);
$obj->push(17);
$obj->push(43);
$obj->push(3);
$obj->unshift(10);


$curr = $obj->current(); // this will return NULL as we have not set initial node;
$obj->rewind();// Rewinding the position so that current node points to first node ";
echo "Linked List (all elements):<br>";
for ($obj->rewind(); $obj->valid(); $obj->next()) {
    echo $obj->current()."\n";echo "<br>";
}
/*
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
*/

echo '<h1 style="text-align: center; font-style: italic">FIFO (SPL)</h1>';
$list = new SplDoublyLinkedList();
$list->push('a');
$list->push('b');
$list->push('c');

echo "<br>";
echo 'TOP: '.$list->top()."\n";echo "<br>";
echo 'BOTTOM: '.$list->bottom()."\n";echo "<br>";

// OUTPUT:
// TOP: c
// BOTTOM: a

//echo "FIFO:\n";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
for ($list->rewind(); $list->valid(); $list->next()) {
    echo $list->current()."\n";echo "<br>";
}

// OUTPUT:
// FIFO:
// a
// b
// c
echo '<h1 style="text-align: center; font-style: italic">LIFO (SPL)</h1>';
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
